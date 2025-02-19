<head>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .container {
            max-width: 900px;
        }

        .form-title {
            font-weight: 700;
            font-size: 24px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .form-label {
            font-weight: 500;
            font-size: 14px;
            color: #6c757d;
        }

        .form-control {
            height: 40px;
            border: none;
            border-bottom: 2px solid #008080;
            border-radius: 0;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #004AAD;
            box-shadow: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Stepper Component (Sticky on Left) -->
            <div class="col-auto d-flex align-items-start p-4">
                <x-stepper :currentStep="session('currentStep', 1)" class="position-sticky top-0" style="width: 255px; height: 831.5px;" />
            </div>

            <div class="container py-4">
                <x-createaccount.back-button title="Create account" backUrl="{{ url()->previous() }}" />
            </div>

            <div class="container py-4">
                <div class="form-title">
                    <x-CreateAccount.form-title title="Getting to know you" />
                </div>



                <!-- First Row -->
                <div class="row g-3">
                    <div class="col-md-4">
                        <x-fields.text-field
                            type="text"
                            name="Firstname"
                            label="First Name"
                            placeholder="First Name"
                            required />
                    </div>
                    <div class="col-md-4">
                        <x-fields.text-field
                            type="text"
                            name="MiddleName"
                            label="Field Label"
                            placeholder="Middle Name" />
                    </div>
                    <div class="col-md-4">
                        <x-fields.text-field
                            type="text"
                            name="LastName"
                            label="Last Name"
                            placeholder="Last Name"
                            required />
                    </div>
                </div>

                <!-- Second Row -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <x-fields.text-field
                            type="date"
                            name="DateOfBirth"
                            label="Date of Birth"
                            required />
                    </div>
                    <div class="col-md-6">
                        <x-fields.text-field
                            type="text"
                            name="PlaceOfBirth"
                            label="Place of Birth"
                            placeholder="City, Region, Country"
                            required />
                    </div>
                </div>

                <!-- Third Row -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <x-fields.dropdown-field
                            name="Sex" label="Sex"
                            :options="['Female' => 'Female', 'Male' => 'Male']"
                            required />
                    </div>
                    <div class="col-md-6">
                        <x-fields.dropdown-field
                            name="Citizenship"
                            label="Citizenship"
                            :options="['Filipino' => 'Filipino', 'Other' => 'Other']"
                            required />
                    </div>
                </div>

                <!-- Fourth Row -->
                <div class="row g-3">
                    <div class="col-md-6">
                        <x-fields.text-field
                            type="text"
                            name="Mobile"
                            label="Mobile*"
                            placeholder="(0917) 678-1234"
                            required />

                    </div>
                    <div class="col-md-6">
                        <x-fields.text-field
                            type="email"
                            name="EmailAddress"
                            label="Email Address*"
                            placeholder="name@gmail.com"
                            required />
                    </div>
                </div>
            </div>

            <!-- Add Bootstrap JavaScript (optional) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>