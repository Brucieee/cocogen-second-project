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
        /* Removes default checkbox appearance */
        position: relative;
        background-color: transparent;
        cursor: pointer; /* Allows clicking on the checkbox */
    }

    /* Checkbox when checked */
    .checkbox-button input[type="checkbox"]:checked {
        background-image: url('/assets/icons/Icon-Checkbox-Pink.svg');
        background-size: 20px 20px; /* Ensures icon size matches the checkbox */
        background-repeat: no-repeat;
        background-position: center; /* Centers the icon */
        border: none; /* Removes the border when checked */
    }

    /* Text Style */
    .checkbox-button label {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        color: var(--Surfaces-LVL-9, #1E1F21);
        pointer-events: none; /* Disables any interaction with the label */
    }

    /* Ensure the cursor is a pointer only on the checkbox */
    .checkbox-button input[type="checkbox"]:hover {
        cursor: pointer; /* Ensures the cursor only changes when hovering over the checkbox */
    }

    /* Make the checkbox button responsive */
    @media (max-width: 992px) {
        .checkbox-button {
            gap: 10px;
        }
    }
</style>

<!-- Checkbox Button with Clickable Checkbox -->
<div class="checkbox-button">
    <input type="checkbox" id="checkbox{{ $id ?? 'default_id' }}" {{ $checked ?? false ? 'checked' : '' }} />
    <label for="checkbox{{ $id ?? 'default_id' }}">{{ $label ?? 'Click me' }}</label>
</div>

<script>
    document.getElementById("checkbox{{ $id ?? 'default_id' }}").addEventListener("change", function() {
        console.log(this.checked ? "Checked" : "Unchecked");
    });
</script>
