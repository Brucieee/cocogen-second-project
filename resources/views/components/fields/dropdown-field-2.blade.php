<div class="dropdown-container">
    <!-- Closed Dropdown Field -->
    <div class="text-field-container">
        <div class="label-container">
            <span class="label-text">
                {{ $label }}
                @if(!empty($required))<span class="required">*</span>@endif
            </span>
        </div>
        <div class="input-container" onclick="toggleDropdown('{{ $id }}')">
            <input 
                type="text" 
                id="{{ $id }}" 
                class="text-field" 
                placeholder="{{ $placeholder }}" 
                oninput="filterOptions(this.value, '{{ $id }}')"
            >
            <img 
                src="{{ asset('assets/icons/Icon-ArrowDown.svg') }}" 
                id="dropdown-icon-{{ $id }}" 
                class="dropdown-icon"
                onload="initializeIcon('{{ $id }}')"
            >
        </div>
    </div>

    <!-- Open Dropdown Menu -->
    <div class="dropdown-menu" id="dropdown-menu-{{ $id }}">
        <!-- Search Bar -->
        <div class="search-bar-container">
            <img src="{{ asset('assets/icons/Icon-Search.svg') }}" class="search-icon">
            <input type="text" class="search-bar" placeholder="Type here to search" oninput="filterOptions(this.value, '{{ $id }}')">
        </div>
        
        <!-- Dropdown Options -->
        <div class="dropdown-options">
            @foreach ($options as $option)
                <div class="dropdown-option" onclick="selectOption('{{ $option }}', '{{ $id }}')">
                    {{ $option }}
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .dropdown-container {
        display: flex;
        flex-direction: column;
        width: {{ $width ?? '100%' }};
        position: relative;
        gap: 5px;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        width: 100%;
        background: white;
        border-radius: 6px;
        border: 1px solid var(--Surfaces-LVL-1, #F2F2F2);
        box-shadow: 4px 2px 10px rgba(230, 230, 230, 0.5);
        z-index: 10;
        box-sizing: border-box;
    }

    .dropdown-icon {
        width: 16px;
        height: 16px;
        margin-left: auto;
        transition: transform 0.3s ease, filter 0.3s ease; /* Smooth transition for both properties */
    }

    .dropdown-menu.open {
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .search-bar-container {
        display: flex;
        padding: 8px 16px;
        align-items: center;
        gap: 10px;
        box-sizing: border-box;
    }

    .search-bar {
        flex: 1;
        padding: 5px 12px;
        border-radius: 5px;
        border: 1px solid #F7F7F7;
        background: #FAFAFA;
    }

    .search-icon {
        width: 16px;
        height: 16px;
    }

    .dropdown-options {
        display: flex;
        flex-direction: column;
    }

    .dropdown-option {
        padding: 8px 16px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .dropdown-option:hover {
        background: var(--Teal-LVL-2, #E0F5F5);
    }
</style>

<script>
    // Initializes the icon to ensure it is visible
    function initializeIcon(id) {
        const icon = document.getElementById(`dropdown-icon-${id}`);
        icon.style.filter = 'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)'; // Initial down arrow icon color
    }

    // Toggles the dropdown visibility and changes the icon accordingly
    function toggleDropdown(id) {
        const allMenus = document.querySelectorAll('.dropdown-menu');
        const allIcons = document.querySelectorAll('.dropdown-icon');
        
        // Close other dropdowns and reset their icons
        allMenus.forEach(menu => {
            if (menu.id !== `dropdown-menu-${id}`) {
                menu.classList.remove('open');
            }
        });
        
        allIcons.forEach(icon => {
            if (icon.id !== `dropdown-icon-${id}`) {
                icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
                icon.style.filter = 'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)'; // #40444D
            }
        });

        // Toggle the clicked dropdown
        const menu = document.getElementById(`dropdown-menu-${id}`);
        const icon = document.getElementById(`dropdown-icon-${id}`);
        menu.classList.toggle('open');
        
        // Change the icon with smooth transition
        if (menu.classList.contains('open')) {
            icon.src = '{{ asset('assets/icons/Icon-ArrowUp.svg') }}';
            icon.style.filter = 'invert(92%) sepia(4%) saturate(0%) hue-rotate(180deg) brightness(98%) contrast(90%)'; // #D7DEE3
        } else {
            icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
            icon.style.filter = 'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)'; // #40444D
        }
    }

    // Filters options in the dropdown based on input value
    function filterOptions(input, id) {
        const options = document.querySelectorAll(`#dropdown-menu-${id} .dropdown-option`);
        options.forEach(option => {
            if (option.textContent.toLowerCase().includes(input.toLowerCase())) {
                option.style.display = 'flex';
            } else {
                option.style.display = 'none';
            }
        });
    }

    // Selects an option, resets the search bar, and closes the dropdown
    function selectOption(value, id) {
        // Set the value of the input field to the selected option
        document.getElementById(id).value = value;
        
        // Clear the search bar
        const searchBar = document.querySelector(`#dropdown-menu-${id} .search-bar`);
        searchBar.value = '';  // Reset the search bar value

        // Close the dropdown and update the icon
        toggleDropdown(id);
    }

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown-container');
        dropdowns.forEach(dropdown => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            const dropdownInput = dropdown.querySelector('.input-container');
            
            // Close dropdown if click is outside the dropdown or the input field
            if (!dropdown.contains(event.target)) {
                dropdownMenu.classList.remove('open');
                // Reset the icon when dropdown is closed
                const icon = dropdown.querySelector('.dropdown-icon');
                icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
                icon.style.filter = 'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)';
            }
        });
    });
</script>
