<!-- Unified Styles -->
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
    }

    .secondary-btn:hover {
        background-color: #008080;
        color: white;
        border: 1px solid #008080;
    }
</style>

<!-- Secondary Button Component -->
<button class="secondary-btn" id="{{ $id ?? 'default-id' }}">
    <span class="button-text">{{ $slot }}</span>
</button>
