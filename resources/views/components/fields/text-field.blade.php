<style>
    /* Main container */
    .text-field-container {
        height: 56px;
        width: {{ $width ?? '100%' }};
        display: flex;
        flex-direction: column;
    }

    /* Label Container */
    .label-container {
        display: flex;
        padding: 0px 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
    }

    /* Label Typography */
    .label-text {
        color: var(--Surfaces-LVL-5, #848A90);
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
    }

    /* Required Asterisk */
    .required {
        color: var(--Status-Danger, #DD0707);
        font-family: 'Inter', sans-serif;
        font-size: 10px;
        font-weight: 400;
        line-height: normal;
        margin-left: 0;
        padding-left: 0;
    }

    /* Input Field Container */
    .input-container {
        display: flex;
        padding: 10px;
        align-items: center;
        gap: 10px;
        align-self: stretch;
        border-radius: 1px;
        border-bottom: 1px solid var(--Teal-LVL-9, #066);
        color: #1E1F21;
    }

    /* Text Field Styling */
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
    }

    /* Placeholder Text Styling */
    .text-field::placeholder {
        color: #1E1F21;
    }
</style>

<div class="text-field-container">
    <!-- Label Container -->
    <div class="label-container">
        <span class="label-text">
            {{ $label }}
            @if(!empty($required))<span class="required">*</span> @endif
        </span>
    </div>

    <!-- Input Field Container -->
    <div class="input-container">
        <input type="{{ $type ?? 'text' }}" id="{{ $id }}" class="text-field" placeholder="{{ $placeholder }}">
    </div>
</div>
