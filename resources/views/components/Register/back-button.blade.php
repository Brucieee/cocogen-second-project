@props(['title', 'backUrl' => null, 'id' => 'default-id'])

<!-- Back Button Styles -->
<style>
    .back-button-container {
        display: flex;
        align-items: center;
        height: 33px;
    }

    .back-button {
        display: flex;
        align-items: center;
        background: none;
        border: none;
        padding: 0;
        cursor: pointer;
    }

    .back-button-icon {
        width: 32px;
        height: 32px;
    }

    .back-button-title {
        color: var(--Primary-Black, #2D2727);
        font-family: 'Inter', sans-serif;
        font-size: 27px;
        font-weight: 700;
        line-height: normal;
        user-select: none; /* Prevents text selection */
        cursor: default; /* Ensures the title is non-clickable */
        pointer-events: none; /* Prevents any click events on the title */
        margin-left: 10px; /* Add spacing between icon and title */
    }
</style>

<div class="back-button-container" id="{{ $id }}">
    @if ($backUrl)
        <button class="back-button" onclick="handleBackButtonClick('{{ $backUrl }}')">
            <img src="{{ asset('assets/icons/Icon-ArrowLeft.svg') }}" alt="Back" class="back-button-icon">
        </button>
    @endif
    <div class="back-button-title">{{ $title }}</div>
</div>

<script>
    function handleBackButtonClick(backUrl) {
        if (backUrl === '#') {
            window.history.back(); // Go back instead of reloading
        } else {
            window.location.href = backUrl;
        }
    }
</script>