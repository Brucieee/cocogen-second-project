<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        /* Remove any margin from the container */
        .container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            margin: 0; /* Remove the margin here */
            padding: 0; /* Ensure padding is also removed */
        }

        .stepper {
            position: sticky;
            top: 0;
            left: 0;
            width: 255px;
            height: 100vh;
            background-color: #fff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .main-container {
            width: 756px;
            height: 692px;
            padding: 35px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            background-color: #f8f9fa; /* Light background */
            color: #212529; /* Dark text color */
        }

        @media (max-width: 992px) {
            .main-container {
                width: 100%;
                margin-left: 20px;
                margin-right: 20px;
            }
            .stepper {
                width: 200px; /* Adjust stepper width on smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Stepper Component (Sticky on Left) -->
        <x-stepper :currentStep="session('currentStep', 2)" class="stepper" />

        <!-- Main Content Section (Right Side) -->
        <div class="main-container mx-auto">

        <x-buttons.checkbox-button id="1" label="Agree to terms and conditions" :checked="false " />

            <!-- Back Button Component -->
            <x-createaccount.back-button title="Create account" backUrl="{{ url()->previous() }}" />

            <!-- Create Account Selection Components -->
            <div id="account-selection" class="d-flex justify-content-center align-items-center gap-4" style="flex-grow: 1;">
                <x-create-account-selection
                    id="policyholder-selection"
                    image="/assets/images/Image-Policyholder.png"
                    title="Policyholder"
                    description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                    buttonText="Create account as Policyholder" />

                <x-create-account-selection
                    id="partner-selection"
                    image="/assets/images/Image-Partner.png"
                    title="Partner"
                    description="Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen."
                    buttonText="Create account as Agent" />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
