<style>
    .text-field-container {
        height: 56px;
        width: {{ $width ?? '100%' }};
        display: flex;
        flex-direction: column;
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
    .valid .text-field::placeholder {
        color: #1E1F21;
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

    .invalid .text-field:hover {
        background: #FFE2E2;
    }

    .invalid .input-container:hover{
        background: #FFE2E2;
    }
    
</style>

<div class="text-field-container" data-id="{{ $id }}">
    <div class="label-container">
        <span class="label-text">
            {{ $label }}
            @if(!empty($required))<span class="required">*</span> @endif
        </span>
    </div>

    <div class="input-container">
        <input type="{{ $type ?? 'text' }}" id="{{ $id }}" class="text-field" placeholder="{{ $placeholder }}">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(".text-field").on("input", function() {
            let inputField = $(this);
            let inputWrapper = inputField.closest(".text-field-container");
            let value = inputField.val();
            let isValid = false;

            if (inputField.attr("type") === "text") {
                isValid = /^[a-zA-Z ]+$/.test(value);
            } else if (inputField.attr("type") === "number") {
                isValid = /^\d{11}$/.test(value); // Valid only when 11 digits
            } else if (inputField.attr("type") === "email") {
                isValid = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
            }

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
