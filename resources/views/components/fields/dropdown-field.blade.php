<style>
    .dropdown-container {
        display: flex;
        flex-direction: column;
        gap: 5px;
        margin: 25px;
        font-family: 'Inter',serif;
    }
    .dropdown-label {
        font-size: 10px;
        display: flex;
        align-items: center;
        color: gray;
        font-weight: 400;
    }
    .asterisk {
        color: red;
        font-size: 14px;
    }
    .dropdown-select {
        width: {{ $width ?? '300px' }};
        height: {{ $height ?? '40px' }};
        font-size: 14px;
        background-color: transparent;
        border-bottom: 1px solid #006666;
        border-left: none;
        border-top: none;
        border-right: none;


    }

    .dropdown-select option {
    background: #f8f9fa; /* Light gray background */
    color: #333; /* Dark text */
    font-size: 14px;
    padding: 10px;
}

/* Highlight effect when hovering */
.dropdown-select option:hover {
    background: #006666;
    color: #fff;
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
