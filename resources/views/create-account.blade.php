<head>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .container {
            max-width: 900px;
        }

        .form-container {
            width: 775px;
            height: 830px;
            margin: auto;
            display: block;

        }

       

        .create-account-2 {

            height: 847px;
            width: 830px;
            margin: auto;
            display: none;
        }

        .question {
            margin-top: 35px;
            margin-bottom: 20px;

        }

        .icon-info2 {
            margin-left: 10px;
            width: 21px;
            height: 21px;
        }

        /* step 2 form */

        .your-identity-container {
            width: 61%;
            height: auto;
            margin: auto;
            padding: 35px;
            font-family: 'Inter', serif;
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {

            $('#form-2').hide();

            $('#next-btn-1').click(function() {
                $("#form-1").hide();
                $("#form-2").show();
            });

            $("#cancel-btn-2").click(function(e) {
                e.preventDefault();
                $("#form-2").hide();
                $("#form-1").show();
            })

            $("#next-btn-2").click(function(e) {
                e.preventDefault();
                $("#form-2").hide();
                $("#identity-form").show();
            })
            $("#cancel-btn-3").click(function(e) {
                e.preventDefault();
                $("#form-2").show();
                $("#identity-form").hide();
            })



        });
    </script>
</head>

<body>

    <div class="container-create-account">
        <form method="" action="">
            @include(Register.create-account-1')
            @include(Register.create-account-2')
            @include(Register.create-account-2-2')
            @include(Register.your-identity-1')
        </form>

    </div>


    

    <!-- Step 2 -->

    <div class="your-identity-container" id="identity-form">
        <div class="your-identity-form" id="identity-form-1">
            <div class="container py-4" style="margin-top:35px;">
                <x-createaccount.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
            </div>
            <div class="form-title" style="margin-left:35px;">
                <x-CreateAccount.form-title title="Your Identity" />
            </div>

            <p class="question" style="margin-left:35px;">Present residence <span class="asterisk-policy">*</span></p>

            <div class="row">
                <div class="col">
                    <x-fields.text-field
                        type="text"
                        name="House-Unit"
                        label="House/Unit No."
                        placeholder="10"
                        width="211px"
                        height="56px"
                        required />

                    <x-fields.dropdown-field
                        name="City"
                        label="City"
                        :options="['City' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="211px"
                        height="56px"
                        required />

                    <x-fields.text-field
                        type="text"
                        name="zip"
                        label="ZIP"
                        placeholder="10"
                        width="211px"
                        height="56px"
                        required />
                </div>
                <div class="col">
                    <x-fields.text-field
                        type="text"
                        name="Street"
                        label="Street"
                        placeholder="Street name"
                        width="211px"
                        height="56px"
                        required />

                    <x-fields.dropdown-field
                        name="Province"
                        label="Province"
                        :options="['City' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="211px"
                        height="56px"
                        required />
                </div>
                <div class="col">
                    <x-fields.dropdown-field
                        name="Barangay"
                        label="Barangay"
                        :options="['Barangay' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="211px"
                        height="56px"
                        required />

                    <x-fields.dropdown-field
                        name="Region"
                        label="Region"
                        :options="['Region' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="211px"
                        height="56px"
                        required />
                </div>
            </div>
            <div class="row" style="margin-top:35px; margin-bottom:35px;">
                <div class="col">
                    <x-Buttons.secondary-arrow-button id="cancel-btn-3">Cancel </x-Buttons.secondary-arrow-button>
                </div>

                <div class="col">
                    <x-Buttons.primary-arrow-button id="next-btn-3">Next </x-Buttons.primary-arrow-button>
                </div>

            </div>

        </div>
    </div>







    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>