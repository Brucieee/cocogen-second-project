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

        .content-container {
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px;
            flex-grow: 1;
        }

        .identity-3-container {
            margin-left: 98px;
            width: 784px;
            height: 454px auto;
            padding: 35px;
            gap: 25px;
            display: flex;
            flex-direction: column;

        }

        .identity-form-3 {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .payment-method {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .pill-button {
            gap: 22px;
            display: flex;

        }

        .payment-fields {
            display: flex;
            justify-content: space-between;
            gap: 25px;
        }

        .next-cancel-btn-3 {
            display: flex;
            justify-content: space-between;
            gap: 25px;
        }

        .form-contents {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }

        .stepper {
            position: fixed;
            width: 200px;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            display: block;
            height: 100%;
        }
    </style>
</head>

<body>

    <div id="step1" class="stepper">
        <x-stepper :currentStep="session('currentStep', 2)" />
    </div>

    <div class="identity-3-container">
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />
        <div class="identity-form-3">
            <x-Register.form-title title="Your identity" />
            <div class="form-contents">
                <div class="payment-method">
                    <x-title-required title="Do you want to add payment method?" placeholder="(Optional)" :required="false" />
                    <div class="pill-btns">
                        <x-Buttons.pill-button
                            id="existing-policy-pill"
                            :pillOneText="'No'"
                            :pillTwoText="'Yes'" />
                    </div>
                    <div class="payment-fields">
                        <x-Fields.dropdown-field-2
                            id="payment-type"
                            name="payment-type"
                            label="Payment Types"
                            :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']"
                            placeholder="Payment Type"
                            width="330px"
                            required />
                        <x-Fields.dropdown-field-2
                            id="bank"
                            name="bank"
                            label="Bank/E-Wallet"
                            :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']"
                            placeholder="Bank/E-Wallet Name"
                            width="330px"
                            required />
                    </div>
                </div>
            </div>

            <div class="reminder-change">
            <x-Reminders.dynamic-reminder
                    icon="assets/icons/Icon-LightBulb.svg"
                    message="You may change your payment method later." />
            </div>


            <div class="next-cancel-btn-3">
                <x-buttons.secondary-button>Cancel</x-buttons.secondary-button>
                <x-buttons.primary-button>Next</x-buttons.primary-button>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>