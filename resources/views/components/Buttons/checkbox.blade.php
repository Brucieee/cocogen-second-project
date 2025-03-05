@props([
    'id' => null, // Unique ID for the checkbox
    'name' => 'checkbox', // Name attribute for the checkbox
    'label' => 'Click me', // Label text
    'checked' => false, // Whether the checkbox is checked
    'disabled' => false, // Whether the checkbox is disabled
    'required' => false, // Whether the checkbox is required
    'value' => 'on', // Value attribute for the checkbox
    'class' => '', // Additional CSS classes for the container
    'labelClass' => '', // Additional CSS classes for the label
    'inputClass' => '', // Additional CSS classes for the input
    'icon' => asset('assets/icons/Icon-Checkbox-Pink.svg'), // Custom check icon
])

@php
    // Generate a unique ID if none is provided
    $checkboxId = $id ?? uniqid('checkbox_');
@endphp

<div class="checkbox-button {{ $class }}" {{ $attributes }}>
    <input
        type="checkbox"
        id="{{ $checkboxId }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @checked($checked)
        @disabled($disabled)
        @required($required)
        class="checkbox-input {{ $inputClass }}"
        aria-labelledby="label-{{ $checkboxId }}"
    />
    <label for="{{ $checkboxId }}" id="label-{{ $checkboxId }}" class="checkbox-label {{ $labelClass }}">
        {{ $label }}
    </label>
</div>

<style>
    .checkbox-button {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 10px;
        height: 44px;
    }

    .checkbox-input {
        width: 20px;
        height: 20px;
        border-radius: 4px;
        border: 2px solid var(--Primary-Light-Pink, #FB9FCD);
        appearance: none;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.2s, border-color 0.2s;
    }

    .checkbox-input:checked {
        background-image: url("{{ $icon }}");
        background-size: 20px 20px;
        background-repeat: no-repeat;
        background-position: center;
        border: none;
    }

    .checkbox-input:disabled {
        background-color: #e9ecef;
        border-color: #ced4da;
        cursor: not-allowed;
    }

    .checkbox-label {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        color: var(--Surfaces-LVL-9, #1E1F21);
        cursor: pointer;
    }

    @media (max-width: 992px) {
        .checkbox-button {
            gap: 10px;
        }
    }
</style>

<script>
    // Event delegation for all checkboxes
    document.addEventListener("change", function(event) {
        if (event.target.matches('.checkbox-input')) {
            console.log(event.target.checked ? "Checked" : "Unchecked");
        }
    });
</script>