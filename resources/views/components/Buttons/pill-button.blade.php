<!-- Add your styles in the head (before the content) -->
<style>
    .pill-buttons-container {
        display: inline-flex;
        align-items: center;
        gap: 17px;
        justify-content: left;
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
        margin-right: 10px; /* Custom margin for spacing */
    }

    .pill-button.expanded {
        background: #E4509A;
        color: white;
    }

    .pill-button.expanded .check-circle-icon {
        display: inline-block;
    }
</style>



<div class="pill-buttons-container d-inline-flex align-items-center gap-17">
    <!-- Pill One -->
    <button class="pill-button btn" id="pill-one" onclick="togglePill('pill-one')">
        <img src="assets/icons/Icon-CheckCircle.svg" class="check-circle-icon" alt="Check Icon">
        <span class="button-text">{{ $pillOneText }}</span>
    </button>

    <!-- Pill Two -->
    <button class="pill-button btn" id="pill-two" onclick="togglePill('pill-two')">
        <img src="assets/icons/Icon-CheckCircle.svg" class="check-circle-icon" alt="Check Icon">
        <span class="button-text">{{ $pillTwoText }}</span>
    </button>
</div>


<!-- Add JavaScript for interaction at the bottom of the page -->
<script>
    function togglePill(pillId) {
        // Get the two pill buttons
        const pillOne = document.getElementById('pill-one');
        const pillTwo = document.getElementById('pill-two');

        // If the clicked pill is already expanded, collapse it
        if (pillId === 'pill-one') {
            pillOne.classList.toggle('expanded');
            pillTwo.classList.remove('expanded'); // Collapse Pill Two if clicked on Pill One
        } else if (pillId === 'pill-two') {
            pillTwo.classList.toggle('expanded');
            pillOne.classList.remove('expanded'); // Collapse Pill One if clicked on Pill Two
        }
    }
</script>
