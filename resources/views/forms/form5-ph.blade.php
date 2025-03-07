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

        .container-wrapperform5 {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        /* .stepper-container {
            width: 255px;
            height: 100vh;
            background-color: #008080;
            padding: 35px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 50px;
            z-index: 1000;
        } */

        form#form5 {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .main-container-wrapper {
            display: flex;
            justify-content: center;
            padding: 20px;
            height: 100%;
            align-items: center;
        }

        .identity-3-container {
            display: inline-flex;
            padding: 35px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #fff);
            width: 780px;
        }

        .identity-form-3 {
            display: flex;
            flex-direction: column;
            gap: 35px;
            width: 100%;
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
            width: 100%;
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
            width: 100%;
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

    <form id="form5" style="display: none;">
        <div class="container-wrapperform5">
            <!-- <div class="stepper-container"> -->
                <x-stepper :currentStep="session('currentStep', 2)" />
            <!-- </div> -->
            <div class="main-container-wrapperform5">
                <div class="identity-3-container">
                    <x-back-title title="Create account as Policyholder" />
                    <div class="identity-form-3">
                        <x-Register.form-title title="Your identity" />
                        <div class="form-contents">
                            <div class="payment-method">
                                <x-title-required title="Do you want to add payment method?" placeholder="(Optional)"
                                    :required="false" />
                                <x-Buttons.pill-button idOne="pill-one-no-payment" idTwo="pill-two-yes-payment"
                                    pillOneText="No" pillTwoText="Yes" />

                                <div class="payment-fields">
                                    <x-dropdown label="Payment Types" id="payment" name="payment" :options="['Debit Card', 'Credit Card']"
                                        placeholder="Payment type" required="true" />

                                    <x-dropdown label="Bank/E-Wallet" id="bankWallet" name="bankWallet" :options="['GCash', 'Maya', 'BDO']"
                                        placeholder="Bank/E-Wallet Name" required="true" />
                                </div>
                            </div>
                        </div>

                        <div class="reminder-change">
                            <x-Reminders.dynamic-reminder icon="assets/icons/Icon-LightBulb.svg"
                                message="You may change your payment method later." />
                        </div>

                        <div class="next-cancel-btn-3">
                            <x-buttons.secondary-button id="backForm5">
                                Back
                            </x-buttons.secondary-button>

                            <x-buttons.primary-button type="submit" id="nextForm5">
                                Next
                            </x-buttons.primary-button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    </div>

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#backForm5').on('click', function(e) {
                e.preventDefault();
                $('#form5').hide();
                $('#form6').show();
            });

            $('#form5').on('submit', function(e) {
                e.preventDefault();
                let addPayment = $('#pill-two-yes-payment').hasClass('expanded');

                let form3Data = JSON.parse(sessionStorage.getItem("form3Data")) || {};
                let form4Data = JSON.parse(sessionStorage.getItem("form4Data")) || {};
                let form5Data = {
                    payment: $("#payment").val(),
                    bankWallet: $("#bankWallet").val(),
                };
                sessionStorage.setItem('form5Data', JSON.stringify(form5Data));

                let id = sessionStorage.getItem("submittedID");

                if (!id) {
                    alert('Error: No ID found. Please start over.');
                    return;
                }

                let combinedData = {
                    ...form3Data,
                    ...form4Data,
                    ...form5Data
                };

                $.ajax({
                    url: '/submit-step2/' + id,
                    type: 'POST',
                    data: combinedData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log('Step 2 submitted successfully:', response);
                        alert('Additional info saved');
                        $('#form5').hide();
                        $('#form6').show();
                        sessionStorage.removeItem("form3Data");
                        sessionStorage.removeItem("form4Data");
                        sessionStorage.removeItem("form5Data");
                    },
                    error: function(xhr, status, error) {
                        console.error("Submit error:", xhr.responseText);
                    }
                });
            });

            // Restore form data if available
            if (sessionStorage.getItem("form5Data")) {
                let savedData = JSON.parse(sessionStorage.getItem("form5Data"));

                if (savedData.addPayment === "yes") {
                    $('#pill-two-yes-payment').addClass('expanded');
                    $('#pill-one-no-payment').removeClass('expanded');
                    $('#payment, #bankWallet').prop('disabled', false).val(savedData.payment);
                } else {
                    $('#pill-one-no-payment').addClass('expanded');
                    $('#pill-two-yes-payment').removeClass('expanded');
                    $('#payment, #bankWallet').prop('disabled', true).val("");
                }
            }

            // Event listener for "No" button
            $('#pill-one-no-payment').on('click', function(event) {
                event.preventDefault();
                $(this).addClass('expanded');
                $('#pill-two-yes-payment').removeClass('expanded');

                // Disable and clear dropdowns
                $('#payment, #bankWallet').prop('disabled', true).val("");
            });

            // Event listener for "Yes" button
            $('#pill-two-yes-payment').on('click', function(event) {
                event.preventDefault();
                $(this).addClass('expanded');
                $('#pill-one-no-payment').removeClass('expanded');

                // Enable dropdowns
                $('#payment, #bankWallet').prop('disabled', false);
            });
        });
    </script>
</body>