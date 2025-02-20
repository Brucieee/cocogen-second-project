<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        .create-account-container {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            margin: 0;
            padding: 0;
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

        .create-account {
            width: 100%;
            padding: 25px;
            display: flex;
            flex-direction: column; /* Stack the elements vertically */
            align-items: flex-start;
            gap: 25px;
            background-color: #f8f9fa;
            color: #212529;
            margin-left: 255px; /* Ensure stepper doesn't overlap */
        }

        .create-account.mx-auto {
            max-width: 756px;
            max-height: 692px;
            margin-top: 50px;
            margin-left: 380px;
        }

        /* Adjust layout for account selection */
        .account-selections {
            display: flex; /* Make the selections appear side by side */
            justify-content: space-between;
            gap: 22px;  /* Space between the selections */
        }

        .create-account-selection {
            width: 100%;
            max-width: 45%;  /* Set max-width for each selection component */
        }

        @media (max-width: 992px) {
            .create-account {
                margin-left: 0;  /* Remove the left margin to center on mobile */
                padding: 20px;
            }

            .account-selections {
                flex-direction: column;  /* Stack selections vertically on smaller screens */
                gap: 15px;
            }

            .create-account-selection {
                width: 100%;  /* Full width on smaller screens */
            }
        }
    </style>
</head>

<body>

    <div class="create-account-container">
        <x-stepper
            :currentStep="session('currentStep', 1)"
            class="stepper" />

        <div class="create-account mx-auto">

            <!-- Back button is at the top -->
            <x-createaccount.back-button
                title="Create account"
                backUrl="{{ url()->previous() }}" />

            <!-- Account selection components side by side in a flex container -->
            <div class="account-selections">
                <x-create-account-selection
                    :id="'policyholder-selection'"
                    image="/assets/images/Image-Policyholder.png"
                    title="Policyholder"
                    description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                    buttonText="Create account as Policyholder" />

                <x-create-account-selection
                    :id="'partner-selection'"
                    image="/assets/images/Image-Partner.png"
                    title="Partner"
                    description="Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen."
                    buttonText="Create account as Agent" />
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#policyholder-selection').on('click', function() {
                console.log('Policyholder button clicked');
            });

            $('#partner-selection').on('click', function() {
                console.log('Partner button clicked');
            });
        });
    </script>
</body>
