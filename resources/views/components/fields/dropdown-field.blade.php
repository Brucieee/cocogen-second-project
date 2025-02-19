<style>
    .dropdown-container {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin: 25px;
        font-family: 'Inter',serif;
    }
    .dropdown-label {
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 2px;
    }
    .asterisk {
        color: red;
        font-size: 14px;
    }
    .dropdown-select {
        width: {{ $width ?? '330px' }};
        height: {{ $height ?? '40px' }};
        padding: 10px;
        font-size: 14px;
        background-color: transparent;
        border-bottom: 2px solid #006666;
        border-left: none;
        border-top: none;
        border-right: none;


    }
</style>

<div class="dropdown-container">
    <label class="dropdown-label" for="{{ $name }}">{{ $label }}<span class="asterisk">*</span></label>
    <select id="{{ $name }}" name="{{ $name }}" class="dropdown-select" style="width: {{ $width ?? '330px' }}; height: {{ $height ?? '40px' }};">
        @foreach ($options as $value => $text)
            <option value="{{ $value }}">{{ $text }}</option>
        @endforeach
    </select>
</div>
