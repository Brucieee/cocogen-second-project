<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row;
        }

        .content-registered {
            width: 474px;
            /* Fixed width */
            height: 315px;
            /* Fixed height */
            margin: auto;
            /* Padding around the content */
            display: flex;
            flex-direction: column;
            /* Keeps back button on top */
            padding: 35;
            /* Space between elements */
            position: relative;
            text-align: center;
            gap: 31px;
        }
        .content-container {
            width: 756px;
            height: 600px;
            margin-top: 184px;
            margin-left: 492px;
            margin-right: 239px;
            margin-bottom: 333px;
            padding: 25px;
            padding-bottom: 0px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            position: relative;
        }

        .icon { 
            width: 65px;
            height: 65px;
            align-items: center;
            text-align: center;
            margin: 0 auto;
        }

        .registered-contents {
            gap: 33px;
            display: flex;
            flex-direction: column;

            

        }
        .checked-icon{
           gap: 35px;
          
        
        }
        .content-text
        {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
    </style>
</head>

<body>

    <div class="content-registered">
        <div class="checked-icon">
        <img class="icon" src="{{ asset('assets/icons/registered-check.svg') }}">
        </div>

        <div class="registered-contents">

            <div class="content-text">
                <div class="content-title">
                    <h2>Account Created</h2>
                </div>
                <div class="content-p">
                    <p>Your account has been created</p>
                </div>

            </div>
            <x-Buttons.primary-button>Go to my Account</x-Buttons.primary-button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>