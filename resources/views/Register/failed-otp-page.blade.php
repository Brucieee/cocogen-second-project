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
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;

        }

        .failed-otp-container {
            width: 378PX;
            height: 418PX;
            padding: 35px;
            gap: 31px;
            text-align: center;
            display: flex;
            flex-direction: column;
            box-shadow: 1px 1px 3px rgb(137, 131, 131);
            background: #FFFFFF;
            margin-left: 531px;
        }

        .warning-contents {
            display: flex;
            gap: 15px;
            flex-direction: column;
        }

        .failed-otp-container h2 {
            font-size: 27px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;

        }


        .failed-otp-container p {
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            color: #585858;


        }
        .warning-icon {
            width: 65px;
            height: 65px;
            align-items: center;
            margin: auto;
        }
    </style>
</head>

<body>

    <x-stepper :currentStep="session('currentStep', 1)" />

    <div class="failed-otp-container">
        <img src="{{asset('assets/icons/Icon-WarningCircle.svg')}}" alt="Icon-warning" class="warning-icon">
        <div class="warning-contents">
            <h2>Contact Cocogen Customer Service</h2>
            <p>You have failed to input correct OTP Please contact Cocogen Customer Service to complete transaction</p>
        </div>

        <x-buttons.primary-button>Proceed</x-buttons.primary-button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>