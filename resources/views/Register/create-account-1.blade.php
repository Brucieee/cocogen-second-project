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

        .form-container-1 {
            width: 784px;
            height: 542px auto;
            top: 96px;
            left: 349px;
            padding: 35px;
            gap: 25px;
            margin: auto;
        }
        .form-1{
            border: 1px solid black;
            gap: 35px;
        }
        .identity-btn-1{
            border: 1px solid black;

        }
    </style>
</head>

<body>




    <div class="form-container-1" id="form-1">
        <div class="form-title">
            <h1>Create account as Policyholder</h1>
        </div>

        <div class="form-1">
            <x-Register.form-title
                title="Your identity" />
            <div class="form-contents-1">
                <div class="row-1">
                    <x-fields.text-field
                        name="house-unit"
                        label="House/Unit No."
                        placeholder="10"
                        required />

                    <x-fields.text-field
                        name="Street"
                        label="Street"
                        placeholder="Street name"
                        required />

                    <x-fields.dropdown-field
                        name="Barangay"
                        label="Barangay"
                        :options="['Pasig Filipino' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="345px"
                        height="56px"
                        required />
                </div>
                <div class="row-2">

                    <x-fields.dropdown-field
                        name="City"
                        label="City"
                        :options="['City' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="345px"
                        height="56px"
                        required />

                    <x-fields.dropdown-field
                        name="Province"
                        label="Province"
                        :options="['Province' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="345px"
                        height="56px"
                        required />

                    <x-fields.dropdown-field
                        name="Region"
                        label="Region"
                        :options="['Region' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="345px"
                        height="56px"
                        required />
                </div>
                <div class="row-3">

                    <x-fields.text-field
                        name="zip"
                        label="ZIP"
                        placeholder="10"
                        required />
                </div>

            </div>

            <div class="identity-btn-1">
                <div class="row-btn">
                    <x-buttons.secondary-button>Cancel</x-buttons.secondary-button>
                    <x-buttons.primary-button>Next</x-buttons.primary-button>

                </div>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>