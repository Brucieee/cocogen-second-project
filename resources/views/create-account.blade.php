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

        .form-container 
        {
            width: 775px;
            height: 830px;
            margin: auto;
            display: block;
        }

        .create-account-1 {
            display: block;
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

        .asterisk-policy {
            color: red;
            font-size: 16px;
            font-family: 'Inter';

        }

        .exisitng-policy {
            padding-bottom: 35px;
        }
    </style>
</head>

<body>

    <div class="create-account-1">
        <div class="container-fluid">
            <div class="row">
                <!-- Stepper Component (Sticky on Left) -->
                <div class="col-auto d-flex align-items-start p-4">
                    <x-stepper :currentStep="session('currentStep', 1)" class="position-sticky top-0" style="width: 255px; height: 831.5px;" />
                </div>



                <div class="form-container">

                    <div class="container py-4" style="margin-top:35px;">
                        <x-createaccount.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
                    </div>
                    <div class="form-title" style="margin-left:35px;">
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
                    <div class="reminder" style="margin-top: 35px; margin-bottom: 35px;">
                        <x-Reminder.reminder-update-profile />
                    </div>


                    <div class="exisitng-policy">
                        <p>Do you have an exisiting policy with Cocogen?<span class="asterisk-policy">*</span></p>
                        <x-Buttons.pill-button
                            :pillOneText="'No'"
                            :pillTwoText="'Yes'" />
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <x-Buttons.secondary-arrow-button>Cancel </x-Buttons.secondary-arrow-button>
                        </div>

                        <div class="col-md-6">
                            <x-Buttons.primary-arrow-button>Next </x-Buttons.primary-arrow-button>
                        </div>

                    </div>



                </div>
            </div>

            <div class="create-account-2">


            </div>



            <!-- Add Bootstrap JavaScript (optional) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>