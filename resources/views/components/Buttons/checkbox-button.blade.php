@php
    $checkboxId = $id ?? uniqid('checkbox_');
@endphp

<style>
    .checkbox-button {
        display: flex;
        padding: 10px;
        align-items: center;
        gap: 15px;
        height: 44px;
    }

    .checkbox-button input[type="checkbox"] {
        width: 20px;
        height: 20px;
        border-radius: 4px;
        border: 2px solid var(--Primary-Light-Pink, #FB9FCD);
        appearance: none;
        position: relative;
        background-color: transparent;
        cursor: pointer;
    }

    .checkbox-button input[type="checkbox"]:checked {
        background-image: url("{{ asset('assets/icons/Icon-Checkbox-Pink.svg') }}");
        background-size: 20px 20px; 
        background-repeat: no-repeat;
        background-position: center; 
        border: none;
    }

    .checkbox-button label {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        color: var(--Surfaces-LVL-9, #1E1F21);
    }

    @media (max-width: 992px) {
        .checkbox-button {
            gap: 10px;
        }
    }
</style>

<div class="checkbox-button">
    <input type="checkbox" id="{{ $checkboxId }}" {{ $checked ?? false ? 'checked' : '' }} />
    <label for="{{ $checkboxId }}">{{ $label ?? 'Click me' }}</label>
</div>

<script>
    // Event delegation for all checkboxes
    document.addEventListener("change", function(event) {
        if (event.target.matches('.checkbox-button input[type="checkbox"]')) {
            console.log(event.target.checked ? "Checked" : "Unchecked");
        }
    });
</script>