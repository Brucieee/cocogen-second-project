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
        }

        .form-container-1 {
            width: 784px;
            height: 542px auto;
            top: 96px;
            left: 349px;
            padding: 35px;
            gap: 25px;
            margin: auto;
            display: flex;
            flex-direction: column;


        }

        .form-1 {
            gap: 35px;
            display: flex;
            flex-direction: column;
        }

        .form-contents-1 {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-p {
            font-size: 16px;
            color: black;
            font-style: 'Inter', serif;
            font-weight: 500;
        }

        .form-span {
            color: red;
        }

        .row-1,
        .row-2 {
            justify-content: space-between;
            gap: 25px;
            display: flex;
        }

        .row-1,
        .row-2 {

            display: flex;
            justify-content: space-between;
            gap: 25px;
            width: 100%;
        }

        .row-1>*,
        .row-2>* {
            flex: 1;
            /* Ensures equal width for all fields */
            min-width: 0;
            /* Prevents flex items from exceeding the container */
        }


        .row-btn {
            justify-content: space-between;
            gap: 25px;
            display: flex;
        }

        .policyholder-title {
            color: var(--Primary-Black, #2D2727);
            font-family: Inter, sans-serif;
            font-size: 27px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 0;
        }

        .identity-form1 {
            display: flex;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="identity-form1">
        <x-stepper :currentStep="session('currentStep', 2)" />

        <div class="form-container-1" id="identity-form-1">

            <h1 class="policyholder-title">Create account as Policyholder</h1>

            <div class="form-1">
                <x-Register.form-title
                    title="Your identity" />
                <div class="form-contents-1">
                    <p class="form-p">Present residence <span class="form-span">*</span></p>
                    <div class="row-1">
                        <x-fields.text-field
                            id="house"
                            name="house-unit"
                            label="House/Unit No."
                            placeholder="10"
                            width="212px"
                            required />

                        <x-fields.text-field
                            id="house"
                            name="Street"
                            label="Street"
                            placeholder="Street name"
                            width="212px"

                            required />

                        <x-fields.dropdown-field-2
                            id="house"
                            name="Barangay"
                            label="Barangay"
                            :options="[ 'Barangay 1', 'Barangay 2', 'Barangay 3']"
                            placeholder="Barangay"
                            width="345px"
                            height="56px"
                            required />
                    </div>
                    <div class="row-2">

                        <x-fields.dropdown-field-2
                            id="city"
                            name="City"
                            label="City"
                            :options="[ 'Pasig', 'Manila', 'Quezon City', 'Cavite']"
                            placeholder="City"
                            width="345px"
                            height="56px"
                            required />

                        <x-fields.dropdown-field-2
                            id="province"
                            name="Province"
                            label="Province"
                            :options="['Manila', 'Batangas', 'Abra']"
                            placeholder="Province"
                            width="345px"
                            height="56px"
                            required />

                        <x-fields.dropdown-field-2
                            id="region"
                            name="Region"
                            label="Region"
                            :options="['NCR', 'Region 1', 'Region 2']"
                            placeholder="Region"
                            width="345px"
                            height="56px"
                            required />
                    </div>
                    <div class="row-3">

                        <x-fields.text-field
                            id="zip"
                            name="zip"
                            label="ZIP"
                            placeholder="10"
                            width="212px"

                            required />
                    </div>

                </div>

                <div class="identity-btn-1">
                    <div class="row-btn">
                        <x-buttons.secondary-button>Continue later</x-buttons.secondary-button>
                        <x-buttons.primary-button id="nextBtn3">Next</x-buttons.primary-button>

                    </div>
                </div>
            </div>

            <div id="identity2-step" style="display: none;">
                @include('Register.your-identity-2')
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#nextBtn3").click(function(event) {
                    event.preventDefault();

                    // Replace the current form content with the included next step
                    $(".identity-form1").html($("#identity2-step").html());
                });
            });
        </script>
</body>