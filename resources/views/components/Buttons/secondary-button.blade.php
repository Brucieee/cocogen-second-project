<style>
    .secondary-btn {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        width: 100%;
        border-radius: 3px;
        background: #F7FCFF;
        color: #008080;
        font-family: Inter, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    /* Hover Effect */
    .secondary-btn:hover {
        background: #008080;
        color: white;
    }

    /* Click Effect */
    .secondary-btn:active,
    .secondary-btn:focus {
        background: #60B3B3;
        color: white;
        outline: none;
        /* Removes the default focus outline */
    }
</style>

@props([
    'id' => null, // Unique ID for the button
    'class' => '', // Additional CSS classes
    'type' => 'button', // Button type (button, submit, reset)
    'disabled' => false, // Whether the button is disabled
    'onclick' => '', // Optional onclick event handler
])

<button id="{{ $id ?? 'default-id' }}" type="{{ $type }}" class="secondary-btn {{ $class }}"
    {{ $disabled ? 'disabled' : '' }} {{ $onclick ? 'onclick="' . $onclick . '"' : '' }} {{ $attributes }} 
    <span class="button-text">{{ $slot }}</span>
</button>
