@props([
    'id' => 'dropdown-' . uniqid(),
    'name' => 'dropdown',
    'label' => 'Label',
    'options' => [], // Array of options (simple values)
    'placeholder' => 'Select an option',
    'required' => false,
    'disabled' => false,
])

<style>
    .dropdown-container {
        display: flex;
        flex-direction: column;
        position: relative;
        gap: 5px;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-text-field-container {
        height: 56px;
        display: flex;
        flex-direction: column;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-label-container {
        display: flex;
        padding: 0px 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-label-text {
        color: var(--Surfaces-LVL-5, #848A90);
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
        width: auto;
    }

    .dropdown-required {
        color: var(--Status-Danger, #DD0707);
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
        margin-left: 0;
        padding-left: 0;
    }

    .dropdown-input-container {
        display: flex;
        padding: 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 1px;
        border-bottom: 1px solid var(--Teal-LVL-9, #066);
        color: #1E1F21;
        transition: all 0.3s ease;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-text-field {
        border: none;
        outline: none;
        width: 100%; /* Ensure it takes the full width of the parent */
        padding: 0;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        color: #1E1F21;
        background: transparent;
        cursor: pointer;
        pointer-events: none;
    }

    .dropdown-text-field::placeholder {
        color: #1E1F21;
    }

    .dropdown-menu {
        display: none; /* Hidden by default */
        position: absolute;
        top: calc(100% + 5px);
        left: 0;
        width: 100%; /* Ensure it takes the full width of the parent */
        background: white;
        border-radius: 6px;
        border: 1px solid var(--Surfaces-LVL-1, #F2F2F2);
        box-shadow: 4px 2px 10px rgba(230, 230, 230, 0.5);
        z-index: 10;
        box-sizing: border-box;
    }

    .dropdown-menu.open {
        display: flex; /* Shown when open */
        flex-direction: column;
        gap: 5px;
    }

    .dropdown-icon {
        width: 16px;
        height: 16px;
        margin-left: auto;
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .search-bar-container {
        display: flex;
        padding: 8px 16px;
        align-items: center;
        gap: 10px;
        box-sizing: border-box;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .search-bar::placeholder {
        font-size: 14px;
    }

    .search-bar {
        flex: 1;
        padding: 5px 12px;
        border-radius: 5px;
        border: 1px solid #F7F7F7;
        background: #FAFAFA;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .search-icon {
        width: 16px;
        height: 16px;
    }

    .dropdown-options {
        display: flex;
        flex-direction: column;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-option {
        padding: 8px 16px;
        cursor: pointer;
        transition: background 0.2s;
        width: 100%; /* Ensure it takes the full width of the parent */
    }

    .dropdown-option:hover {
        background: var(--Teal-LVL-2, #E0F5F5);
    }

    /* Disabled State */
    .dropdown-container.disabled .dropdown-input-container {
        border-bottom: 1px solid var(--Surfaces-LVL-5, #848A90);
        background: var(--Surfaces-LVL-1, #F7FCFF);
        cursor: not-allowed;
    }

    .dropdown-container.disabled .dropdown-text-field {
        background: var(--Surfaces-LVL-1, #F7FCFF);
        cursor: not-allowed;
        color: var(--Surfaces-LVL-5, #848A90);
    }

    .dropdown-container.disabled .dropdown-text-field::placeholder {
        color: var(--Surfaces-LVL-5, #848A90);
    }

    .dropdown-container.disabled .dropdown-icon {
        filter: invert(80%) sepia(0%) saturate(0%) hue-rotate(180deg) brightness(90%) contrast(90%);
        /* Grayed out */
    }
</style>

<div class="dropdown-container @if ($disabled) disabled @endif">
    <!-- Closed Dropdown Field -->
    <div class="dropdown-text-field-container">
        <div class="dropdown-label-container">
            <span class="dropdown-label-text">
                {{ $label }}
                @if ($required)
                    <span class="dropdown-required">*</span>
                @endif
            </span>
        </div>
        <div class="dropdown-input-container"
            onclick="!this.closest('.dropdown-container').classList.contains('disabled') && toggleDropdown('{{ $id }}')">
            <input
                type="text"
                id="{{ $id }}"
                name="{{ $name }}"
                class="dropdown-text-field"
                placeholder="{{ $placeholder }}"
                readonly
                @if ($disabled) disabled @endif
            />
            <img src="{{ asset('assets/icons/Icon-ArrowDown.svg') }}" id="dropdown-icon-{{ $id }}"
                class="dropdown-icon" onload="initializeIcon('{{ $id }}')">
        </div>
    </div>

    <!-- Open Dropdown Menu -->
    <div class="dropdown-menu" id="dropdown-menu-{{ $id }}">
        <!-- Search Bar -->
        <div class="search-bar-container">
            <img src="{{ asset('assets/icons/Icon-Search.svg') }}" class="search-icon">
            <input type="text" class="search-bar" placeholder="Type here to search"
                oninput="filterOptions(this.value, '{{ $id }}')">
        </div>

        <!-- Dropdown Options -->
        <div class="dropdown-options">
            @foreach ($options as $option)
                <div class="dropdown-option"
                    onclick="!this.closest('.dropdown-container').classList.contains('disabled') && selectOption('{{ $option }}', '{{ $id }}')">
                    {{ $option }}
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function initializeIcon(id) {
        const icon = document.getElementById(`dropdown-icon-${id}`);
        icon.style.filter =
            'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)'; 
    }

    function toggleDropdown(id) {
        const allMenus = document.querySelectorAll('.dropdown-menu');
        const allIcons = document.querySelectorAll('.dropdown-icon');

        allMenus.forEach(menu => {
            if (menu.id !== `dropdown-menu-${id}`) {
                menu.classList.remove('open');
            }
        });

        allIcons.forEach(icon => {
            if (icon.id !== `dropdown-icon-${id}`) {
                icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
                icon.style.filter =
                    'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)';
            }
        });

        const menu = document.getElementById(`dropdown-menu-${id}`);
        const icon = document.getElementById(`dropdown-icon-${id}`);
        menu.classList.toggle('open');

        if (menu.classList.contains('open')) {
            icon.src = '{{ asset('assets/icons/Icon-ArrowUp.svg') }}';
            icon.style.filter =
                'invert(92%) sepia(4%) saturate(0%) hue-rotate(180deg) brightness(98%) contrast(90%)';
        } else {
            icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
            icon.style.filter =
                'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)';
        }
    }

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

    function selectOption(value, id) {
        const inputField = document.getElementById(id);
        inputField.value = value; // Set the selected option as the value

        const searchBar = document.querySelector(`#dropdown-menu-${id} .search-bar`);
        searchBar.value = ''; // Clear the search bar

        toggleDropdown(id); // Close the dropdown
    }

    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.dropdown-container');
        dropdowns.forEach(dropdown => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');

            if (!dropdown.contains(event.target)) {
                dropdownMenu.classList.remove('open');
                const icon = dropdown.querySelector('.dropdown-icon');
                icon.src = '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
                icon.style.filter =
                    'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)';
            }
        });
    });
</script>