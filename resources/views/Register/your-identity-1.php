<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%; 
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row; 
        }
        .content-container {
            margin-top: 66px;
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px; 
            flex-grow: 1; 
        }
    </style>
</head>

<body>

    <div class="stepper-container">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="content-container">
    <div class="your-identity-container" id="identity-form">
                <div class="your-identity-form" id="identity-form-1">
                    <div class="container py-4" style="margin-top:35px;">
                        <x-Register.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
                    </div>
                    <div class="form-title" style="margin-left:35px;">
                        <x-Register.form-title title="Your Identity" />
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

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>