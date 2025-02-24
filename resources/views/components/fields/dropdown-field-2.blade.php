<div class="dropdown-container">
    <!-- Closed Dropdown Field -->
    <div class="text-field-container">
        <div class="label-container">
            <span class="label-text">
                {{ $label }}
                @if(!empty($required))<span class="required">*</span>@endif
            </span>
        </div>
        <div class="input-container" onclick="toggleDropdown()">
            <input 
                type="text" 
                id="{{ $id }}" 
                class="text-field" 
                placeholder="{{ $placeholder }}" 
                oninput="filterOptions(this.value)"
            >
            <img src="{{ asset('assets/icons/Icon-ArrowDown.svg') }}" id="dropdown-icon" class="dropdown-icon">
        </div>
    </div>

    <!-- Open Dropdown Menu -->
    <div class="dropdown-menu" id="dropdown-menu">
        <!-- Search Bar -->
        <div class="search-bar-container">
            <img src="{{ asset('assets/icons/Icon-Search.svg') }}" class="search-icon">
            <input type="text" class="search-bar" placeholder="Type here to search" oninput="filterOptions(this.value)">
        </div>
        
        <!-- Dropdown Options -->
        <div class="dropdown-options">
            @foreach ($options as $option)
                <div class="dropdown-option" onclick="selectOption('{{ $option }}')">
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
        transition: transform 0.3s ease;
        filter: invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%);
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
    function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        const icon = document.getElementById('dropdown-icon');
        menu.classList.toggle('open');
        icon.src = menu.classList.contains('open') 
            ? '{{ asset('assets/icons/Icon-ArrowUp.svg') }}' 
            : '{{ asset('assets/icons/Icon-ArrowDown.svg') }}';
        icon.style.filter = menu.classList.contains('open')
            ? 'invert(92%) sepia(4%) saturate(0%) hue-rotate(180deg) brightness(98%) contrast(90%)' // #D7DEE3
            : 'invert(22%) sepia(4%) saturate(529%) hue-rotate(180deg) brightness(92%) contrast(91%)'; // #40444D
    }

    function filterOptions(input) {
        const options = document.querySelectorAll('.dropdown-option');
        options.forEach(option => {
            if (option.textContent.toLowerCase().includes(input.toLowerCase())) {
                option.style.display = 'flex';
            } else {
                option.style.display = 'none';
            }
        });
    }

    function selectOption(value) {
        document.getElementById('{{ $id }}').value = value;
        toggleDropdown();
    }
</script>
