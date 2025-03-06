<style>
    .pill-buttons-container {
        display: flex;
        align-items: center;
        gap: 17px;
    }

    .pill-button {
        display: flex;
        padding: 10px 25px;
        justify-content: center;
        align-items: center;
        border-radius: 25px;
        border: 1px solid #E4509A;
        background: transparent;
        color: #E4509A;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .pill-button:hover {
        background: #E4509A;
        color: white;
        box-shadow: 1px 3px 4px 0px rgba(203, 161, 182, 0.86);
    }

    .check-circle-icon {
        display: none;
        width: 24px;
        height: 24px;
        margin-right: 10px;
    }

    .pill-button.expanded {
        background: #E4509A;
        color: white;
    }

    .pill-button.expanded .check-circle-icon {
        display: inline-block;
    }
</style>

<div class="pill-buttons-container">
    <button class="pill-button" id="{{ $idOne ?? 'pill-one' }}" onclick="togglePill('{{ $idOne ?? 'pill-one' }}', '{{ $idTwo ?? 'pill-two' }}')">
        <img src="assets/icons/Icon-CheckCircle.svg" class="check-circle-icon" alt="Check Icon">
        <span class="button-text">{{ $pillOneText }}</span>
    </button>

    <button class="pill-button" id="{{ $idTwo ?? 'pill-two' }}" onclick="togglePill('{{ $idTwo ?? 'pill-two' }}', '{{ $idOne ?? 'pill-one' }}')">
        <img src="assets/icons/Icon-CheckCircle.svg" class="check-circle-icon" alt="Check Icon">
        <span class="button-text">{{ $pillTwoText }}</span>
    </button>
</div>

<script>
    function togglePill(selectedId, otherId) {
        document.getElementById(selectedId).classList.add('expanded');
        document.getElementById(otherId).classList.remove('expanded');
    }
</script>
