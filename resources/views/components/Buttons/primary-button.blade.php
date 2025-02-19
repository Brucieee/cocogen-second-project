<style>
    .primary-button {
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
    }
</style>


<button class="primary-button">
    {{ $slot }}
</button>