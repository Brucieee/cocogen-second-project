<head>
    <style>
        .modal-background {
            display: none;
            position: fixed;
            z-index: 1;
            height: 100%;
            width: 100%;
            background: #9E9C9C80;
            margin: auto;

        }

        .modal-container {
            margin-top: 159px;
            margin-left: 766px;
            margin-right: 375px;
            margin-bottom: 282px;
            gap: 31px;
            background: #fff;
            width: 440px ;
            height: 391px ;
            padding: 35px;
            text-align: center;
            display: flex;
            flex-direction: column;
            border-radius: 8px;
        }

        .modal-content {
            text-align: center;
            gap: 33px;
        }
        .warning-icon
        {
            width: 65px;
            height: 65px;
            margin: auto;
        }
        .content-title
        {
            font-weight: 700;
            font-family: 'Inter',serif;
            font-size: 27px;
            color: #2D2727;
        }
        .content-p
        {
            font-size: 17px;
            font-family: 'Inter',serif;
            font-weight: 500;
            color: #585858;
        }
    </style>
</head>
<div class="modal-background" id="continueLaterModal">
    <div class="modal-container">

        <img src="{{ asset('assets/icons/Icon-WarningTriangle.svg') }}" alt="Warning Icon" class="warning-icon">
        <div class="modal-content">
            <div class="modal-text">
                <h3 class="content-title">
                    Continue Later
                </h3>
                <p class="content-p">
                    Access and update your information through 
                    the link we will send to your email
                </p>

            </div>
            <div class="continue-later-btn">
                <x-buttons.primary-button id="yes_continue_later"> Yes, continue later </x-buttons.primary-button>
                <x-buttons.secondary-button id="no_continue_later"> Close </x-buttons.secondary-button>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Show Modal when clicking "Yes, continue later"
        $("#openModal").click(function() {
            $("#continueLaterModal").fadeIn();
        });

        // Hide Modal when clicking "Close" button
        $("#no_continue_later").click(function() {
            $("#continueLaterModal").fadeOut();
        });

        // Hide Modal when clicking outside the modal container
        $("#continueLaterModal").click(function(event) {
            if (!$(event.target).closest(".modal-container").length) {
                $("#continueLaterModal").fadeOut();
            }
        });
    });
</script>