@props([
    'id' => 'primary-button-' . uniqid(), // Unique ID for the button
    'class' => '', // Additional CSS classes
    'type' => 'button', // Button type (button, submit, reset)
    'disabled' => false, // Whether the button is disabled
    'onclick' => '', // Optional onclick event handler
    'ariaLabel' => '', // Optional aria-label for accessibility
])

<style>
    .primary-btn {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        width: 100%;
        border-radius: 3px;
        background: #008080;
        color: #FFF;
        font-family: Inter, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
        border: none;
        cursor: pointer;
        transition: background-color 0.2s ease, transform 0.1s ease;
    }

    /* Hover Effect */
    .primary-btn:hover {
        background: #006666; /* Darker shade for hover */
    }

    /* Active (Click) Effect */
    .primary-btn:active {
        background: #60B3B3;
        transform: scale(0.98); /* Slight shrink effect on click */
    }

    /* Focus Effect */
    .primary-btn:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(0, 128, 128, 0.3); /* Focus ring for accessibility */
    }

    /* Disabled State */
    .primary-btn:disabled {
        background: #CCCCCC;
        color: #666666;
        cursor: not-allowed;
    }
</style>

<button
    id="{{ $id }}"
    type="{{ $type }}"
    class="primary-btn {{ $class }}"
    {{ $disabled ? 'disabled' : '' }}
    {{ $onclick ? 'onclick="' . $onclick . '"' : '' }}
    {{ $attributes }} 
    aria-label="{{ $ariaLabel }}"
>
    <span class="button-text">{{ $slot }}</span>
</button>