@props([
    'id' => 'text-field-' . uniqid(), // Unique ID for the input
    'label' => 'Label', // Field label
    'type' => 'text', // Input type (text, number, email, etc.)
    'placeholder' => '', // Placeholder text
    'required' => false, // Whether the field is required
    'width' => '100%', // Width of the field container
])

<style>
    .text-field-container {
        height: 56px;
        width: {{ $width }};
        display: flex;
        flex-direction: column;
        margin-bottom: 15px; /* Add spacing between fields */
    }

    .label-container {
        display: flex;
        padding: 0px 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    .label-text {
        color: #033;
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
    }

    .required {
        color: #DD0707;
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
        margin-left: 0;
        padding-left: 0;
    }

    .input-container {
        display: flex;
        padding: 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 1px;
        border-bottom: 1px solid var(--Surfaces-LVL-5, #848A90);
        color: #1E1F21;
        transition: all 0.3s ease;
    }

    .text-field {
        border: none;
        outline: none;
        width: 100%;
        padding: 0;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        color: #1E1F21;
        background: transparent;
    }

    .text-field::placeholder {
        color: #848A90;
    }

    /* Hide number input arrows */
    .text-field[type="number"]::-webkit-outer-spin-button,
    .text-field[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .text-field[type="number"] {
        -moz-appearance: textfield;
    }

    /* Valid State */
    .valid .label-text {
        color: #848A90;
    }

    .valid .input-container {
        border-bottom: 1px solid var(--Teal-LVL-9, #066);
    }

    .valid .input-container:hover {
        border-bottom: 1px solid var(--Teal-LVL-9, #066);
        background: var(--Teal-LVL-1, #F0FFFF);
    }

    /* Invalid State */
    .invalid .input-container {
        border-bottom: 1px solid var(--Status-Danger, #DD0707);
        background: #FFF7F7;
    }

    .invalid .text-field {
        color: #DD0707;
        background: #FFF7F7;
    }

    .invalid .input-container:hover {
        background: #FFE2E2;
    }
</style>

<div class="text-field-container" data-id="{{ $id }}">
    <div class="label-container">
        <span class="label-text">
            {{ $label }}
            @if ($required)
                <span class="required">*</span>
            @endif
        </span>
    </div>

    <div class="input-container">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $id }}"
            class="text-field"
            placeholder="{{ $placeholder }}"
            @if ($required) required @endif
            aria-label="{{ $label }}"
        />
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".text-field").on("input", function() {
            let inputField = $(this);
            let inputWrapper = inputField.closest(".text-field-container");
            let value = inputField.val().trim();
            let isValid = false;

            // Validation rules based on input type
            switch (inputField.attr("type")) {
                case "text":
                    isValid = /^[a-zA-Z\s\-']+$/.test(value); // Allow letters, spaces, hyphens, and apostrophes
                    break;
                case "number":
                    isValid = /^09\d{9}$/.test(value); // Must start with 09 and have exactly 11 digits
                    break;
                case "email":
                    isValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value); // Email validation
                    break;
                default:
                    isValid = true; // No validation for other types
            }

            // Update valid/invalid states
            if (value === "") {
                inputWrapper.removeClass("valid invalid");
            } else if (isValid) {
                inputWrapper.removeClass("invalid").addClass("valid");
            } else {
                inputWrapper.removeClass("valid").addClass("invalid");
            }
        });
    });
</script>