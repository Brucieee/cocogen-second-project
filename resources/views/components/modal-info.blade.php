<div>
    <!-- Info Icon -->
    <img src="{{ asset('assets/icons/Icon-Info2.svg') }}"
        alt="Icon-Info"
        class="icon-info"
        id="infoIcon"
        style="cursor: pointer;">

    <!-- Modal (Hidden by Default) -->
    <div id="infoModal" class="modal-overlay">
        <div class="modal-content">
            <div class="title-p">
                <p class="modal-title">BRANCH HOURS</p>
                <div class="modal-p">
                    <p>Cocogen branches are open Monday to Friday, from 8AM to 5PM.  Please be reminded you will be accommodated within office hours only. </p>
                    <p>If you have concerns regarding account creation, you may email <span style="font-weight: bold;">client_services@cocogen.com</span> </p>
                </div>
            </div>
            <button id="closeModal" class="close-btn">Close</button>
        </div>
    </div>
</div>

<!-- CSS Styling -->
<style>
    /* Ensure the modal is completely hidden on page load */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #9E9C9C80;
        justify-content: center;
        z-index: 1000;
    }

    .modal-content {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 393px;
        height: 284px auto;
        margin-left: 40%;
        margin-bottom: 359px;
        margin-right: 390px;
        margin-top: 189px;
        display: flex;
        gap: 15px;
        
    }
    .title-p{
        display: flex;
        gap: 15px;
        flex-direction: column;
    }
    .modal-title 
    {
        font-weight: 700;
        font-size: 16px;
        font-family: 'Inter', sans-serif;
    }
    .modal-p 
    {
        display: flex;
        gap: 16px;
        flex-direction: column;
    }
    .modal-p p
    {
        text-align: left;
        text-shadow: 14px;
        font-weight: 400;
        color: #2D2727;
        font-family: 'Inter',sans-serif;
    }

    .close-btn {
        margin-top: 15px;
        padding: 8px 15px;
        border: none;
        background: transparent;
        color: #008080;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

<!-- jQuery for Modal Behavior -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Ensure modal is hidden on page load
        $('#infoModal').hide();

        // Show modal when info icon is clicked
        $('#infoIcon').click(function() {
            $('#infoModal').fadeIn();
        });

        // Hide modal when close button is clicked
        $('#closeModal').click(function() {
            $('#infoModal').fadeOut();
        });

        // Hide modal when clicking outside modal content
        $(document).click(function(event) {
            if (!$(event.target).closest('.modal-content, #infoIcon').length) {
                $('#infoModal').fadeOut();
            }
        });
    });
</script>