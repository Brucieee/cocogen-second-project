<style>
    .text-field-container {
        display: flex;
        flex-direction: column;
        gap: 5px;
        font-family: 'Inter', serif;
        margin: 20px;
    }

    .text-field {
        width: {{ $width ?? '100%' }};
        height: {{ $height ?? 'auto' }};
        max-width: 400px;
        padding: 10px;
        border: none;
        border-bottom: 1px solid #006666;
        font-size: 14px;
    }

    .text-field::placeholder {
        color: black;
    }

    .text-label {
        font-size: 10px;
        display: flex;
        align-items: center;
        gap: 1px;
        margin-left: 10px;
        color: gray;
    }

    .asterisk {
        color: red;
        font-size: 10px;
    }
    
</style>

<div class="text-field-container">
    <label class="text-label" for="{{ $name }}">{{ $label }} 
        @if(!empty($required))<span class="asterisk">*</span>@endif
    </label>
    <input 
        type="{{ $type ?? 'text' }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        class="text-field" 
        placeholder="{{ $placeholder ?? '' }}" 
        style="width: {{ $width ?? '100%' }}; height: {{ $height ?? 'auto' }};"
    >
</div>
