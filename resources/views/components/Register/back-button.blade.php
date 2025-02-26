@props(['title', 'backUrl' => null])

<!-- Back Button Styles -->
<style>
    .back-button-container {
        display: flex;
        align-items: center;
        gap: 23px;
        height: 33px;
        width: auto;
    }

    .back-button {
        display: flex;
        align-items: center;
        gap: 23px;
        background: none;
        border: none;
        padding: 0;
    }

    .back-button-icon {
        width: 32px;
        height: 32px;
        cursor: pointer;
    }

    .back-button-title {
        color: var(--Primary-Black, #2D2727);
        font-family: 'Inter', sans-serif;
        font-size: 27px;
        font-weight: 700;
        line-height: normal;
    }
</style>

<!-- Back Button Component -->
<div class="back-button-container" id="{{ $id ?? 'default-id' }}">
    @if($backUrl)
        <button class="back-button" onclick="window.location.href='{{ $backUrl }}'">
            <img src="{{ asset('assets/icons/Icon-ArrowLeft.svg') }}" alt="Back" class="back-button-icon">
        </button>
    @endif
    <div class="back-button-title">{{ $title }}</div>
</div>
