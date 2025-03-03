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
            margin: auto;
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

        .pill-button-container-payment {
            display: flex;
            gap: 22px;
            flex-direction: column;
            width: 372px;
            align-items: flex-start;
            /* Prevents stretching */
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

        /* Custom CSS for disabled dropdowns */
        select:disabled {
            background-color: #f8f9fa;
            /* Light gray background */
            cursor: not-allowed;
            /* Show not-allowed cursor */
            opacity: 0.7;
            /* Reduce opacity to indicate disabled state */
        }
    </style>
</head>

<body>
    
    <x-stepper :currentStep="session('currentStep', 2)" />

    <div class="identity-3-container">
        <x-Register.back-button title="Create account as Policyholder" />
        <div class="identity-form-3">
            <x-Register.form-title title="Your identity" />
            <div class="form-contents">
                <div class="payment-method">
                    <x-title-required
                        title="Do you want to add payment method?"
                        placeholder="(Optional)"
                        :required="false" />
                    <x-Buttons.pill-button
                        idOne="pill-one-no-payment"
                        idTwo="pill-two-yes-payment"
                        pillOneText="No"
                        pillTwoText="Yes" />

                    <div class="payment-fields">
                        <x-Fields.dropdown-field-2
                            id="payment-type"
                            name="payment-type"
                            label="Payment Types"
                            :options="['Debit Card', 'Credit Card']"
                            placeholder="Payment Type"
                            width="330px"
                            :disabled="true"
                            required />

                        <x-Fields.dropdown-field-2
                            id="bank"
                            name="bank"
                            label="Bank/E-Wallet"
                            :options="['GCash', 'Maya', 'BDO']"
                            placeholder="Bank/E-Wallet Name"
                            width="330px"
                            :disabled="true"
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
                <x-buttons.primary-button id="nextBtn4">Next</x-buttons.primary-button>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Disable dropdowns by default (if "No" is selected by default)
            $('#payment-type').prop('disabled', true);
            $('#bank').prop('disabled', true);

            // Handle "No" button click using event delegation
            $(document).on('click', '#pill-one-no-payment', function() {
                console.log('No button clicked');
                $('#payment-type').prop('disabled', true);
                $('#bank').prop('disabled', true);
                console.log('Payment Type Disabled:', $('#payment-type').prop('disabled')); // Debug
                console.log('Bank Disabled:', $('#bank').prop('disabled')); // Debug

                // Debug: Log the dropdown elements
                console.log('Payment Type Element:', $('#payment-type')[0]);
                console.log('Bank Element:', $('#bank')[0]);
            });

            // Handle "Yes" button click using event delegation
            $(document).on('click', '#pill-two-yes-payment', function() {
                console.log('Yes button clicked');
                $('#payment-type').prop('disabled', false);
                $('#bank').prop('disabled', false);
                console.log('Payment Type Disabled:', $('#payment-type').prop('disabled')); // Debug
                console.log('Bank Disabled:', $('#bank').prop('disabled')); // Debug

                // Debug: Log the dropdown elements
                console.log('Payment Type Element:', $('#payment-type')[0]);
                console.log('Bank Element:', $('#bank')[0]);
            });
        });
    </script>
</body>