@props(['title'])

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
    }

    .back-button-icon {
        width: 23px;
        height: 23px;
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
<div class="back-button-container">
    <img src="{{ asset('/icons/Icon-ArrowLeft.svg') }}" alt="Back" class="back-button-icon">
    <div class="back-button-title">{{ $title }}</div>
</div>
