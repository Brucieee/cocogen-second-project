@props(['title', 'backUrl' => null, 'id' => 'default-id'])

<!-- Back Button Styles -->
<style>
    .back-button-container {
        display: flex;
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
        cursor: pointer;
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

<div class="back-button-container" id="{{ $id }}">
    @if ($backUrl)
        <button class="back-button" onclick="handleBackButtonClick('{{ $backUrl }}')">
            <img src="{{ asset('assets/icons/Icon-ArrowLeft.svg') }}" alt="Back" class="back-button-icon">
        </button>
    @endif
    <div class="back-button-title" onclick="event.stopPropagation();">{{ $title }}</div>
</div>

<script>
    function handleBackButtonClick(backUrl) {
        if (backUrl === '#') {
            // Handle dynamic behavior (e.g., reload or show the previous page)
            window.location.reload(); // Reload the page (or use AJAX to load the previous content)
        } else {
            // Navigate to the specified URL
            window.location.href = backUrl;
        }
    }
</script>
