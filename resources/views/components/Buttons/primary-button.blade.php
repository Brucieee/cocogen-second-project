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
        transition: background-color 0.2s ease;
    }

    .primary-btn:active {
        background: var(--Teal-LVL-6, #60B3B3);
    }
</style>

<button class="primary-btn" id="{{ $id ?? 'default-id' }}">
    <span class="button-text">{{ $slot }}</span>
</button>