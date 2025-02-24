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
            gap: 55px;
            margin-left: 300px;
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

        .row-btn {
            justify-content: space-between;
            gap: 25px;
            display: flex;
        }
    </style>
</head>

<body>




    <div class="form-container-1" id="identity-form-1">

        <h1>Create account as Policyholder</h1>
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

                    <x-fields.dropdown-field
                        id="house"
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
                        id="house"
                        name="zip"
                        label="ZIP"
                        placeholder="10"
                        width="212px"

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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>