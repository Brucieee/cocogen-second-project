<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        form#form3 {
            margin: 0;
            padding: 0;
            width: 100%;
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

    <form id="form3" style="display: none;">
        <div class="identity-form1">
            <x-stepper :currentStep="session('currentStep', 2)" />

            <div class="form-container-1" id="identity-form-1">

                <h1 class="policyholder-title">Create account as Policyholder</h1>

                <div class="form-1">
                    <x-Register.form-title title="Your identity" />
                    <div class="form-contents-1">
                        <p class="form-p">Present residence <span class="form-span">*</span></p>
                        <div class="row-1">

                            <x-text-field label="House/Unit No." id="unitNo" type="text" placeholder="10"
                                required="true" />

                            <x-text-field label="Street" id="street" type="text" placeholder="Street name"
                                required="true" />

                            <x-dropdown label="Barangay" id="barangay" name="barangay" :options="[
                                'Bel-Air',
                                'San Antonio',
                                'Lahug',
                                'Holy Spirit',
                                'Poblacion',
                                'Talon Uno',
                                'Malabanias',
                                'Mabolo',
                                'Banilad',
                                'Guadalupe',
                            ]"
                                placeholder="Barangay" required="true" />

                        </div>
                        <div class="row-2">

                            <x-dropdown label="City" id="city" name="city" :options="['Pasig', 'Manila', 'Quezon City', 'Cavite']"
                                placeholder="City" required="true" />

                            <x-dropdown label="Province" id="province" name="province" :options="[
                                'Cebu',
                                'Pampanga',
                                'Batangas',
                                'Bulacan',
                                'Laguna',
                                'Rizal',
                                'Palawan',
                                'Iloilo',
                                'Davao del Sur',
                                'Zambales',
                            ]"
                                placeholder="Province" required="true" />

                            <x-dropdown label="Region" id="region" name="region" :options="[
                                'National Capital Region (NCR)',
                                'Ilocos Region (Region I)',
                                'Cagayan Valley (Region II)',
                                'Central Luzon (Region III)',
                                'CALABARZON (Region IV-A)',
                                'MIMAROPA (Region IV-B)',
                                'Bicol Region (Region V)',
                                'Western Visayas (Region VI)',
                                'Central Visayas (Region VII)',
                                'Eastern Visayas (Region VIII)',
                                'Zamboanga Peninsula (Region IX)',
                                'Northern Mindanao (Region X)',
                                'Davao Region (Region XI)',
                                'SOCCSKSARGEN (Region XII)',
                                'Caraga (Region XIII)',
                                'Bangsamoro Autonomous Region in Muslim Mindanao (BARMM)',
                                'Cordillera Administrative Region (CAR)',
                            ]"
                                placeholder="Region" required="true" />

                        </div>
                        <div class="row-3">

                            <x-text-field label="Zip" id="zip" type="zip" placeholder="10" />

                        </div>
                    </div>

                    <div class="identity-btn-1">
                        <div class="row-btn">
                            <x-buttons.secondary-button id="continueForm3">
                                Continue later
                            </x-buttons.secondary-button>

                            <x-buttons.primary-button id="nextForm3">
                                Next
                            </x-buttons.primary-button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#nextForm3').on('click', function(e) {
                e.preventDefault();
                $('#form3').hide();
                $('#form4').show();




                let form3Data = {
                    unitNo: $("#unitNo").val(),
                    street: $("#street").val(),
                    barangay: $("#barangay").val(),
                    city: $("#city").val(),
                    province: $("#province").val(),
                    region: $("#region").val(),
                    zip: $("#zip").val(),
                    
                };
                sessionStorage.setItem('form3Data', JSON.stringify(form3Data));
            });

            // Pre-populate form fields if data is available in sessionStorage
            if (sessionStorage.getItem("form3Data")) {
                let formData = JSON.parse(sessionStorage.getItem("form3Data"));
                $('#unitNo').val(formData.unitNo);
                $('#street').val(formData.street);
                $('#barangay').val(formData.barangay);
                $('#city').val(formData.city);
                $('#province').val(formData.province);
                $('#region').val(formData.region);
                $('#zip').val(formData.zip);

            }

        });
    </script>
</body>
