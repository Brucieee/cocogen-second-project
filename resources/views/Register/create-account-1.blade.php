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
    </style>
</head>

<body>

    <div class="stepper-container">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="content-container">
    <div class="create-account-1">
        <div class="container-fluid">
            <div class="row">
                



                <div class="form-container" id="form-1">

                    <div class="container py-4" style="margin-top:35px;">
                        <x-Register.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
                    </div>
                    <div class="form-title" style="margin-left:35px;">
                        <x-Register.form-title title="Getting to know you" />
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
                            id="existing-policy-pill"
                            :pillOneText="'No'"
                            :pillTwoText="'Yes'" />
                    </div>


                    <div class="row" style="margin-top: 35px; margin-bottom:35px;">
                        <div class="col-md-6">
                            <x-Buttons.secondary-arrow-button id="cancel-btn-1">Cancel </x-Buttons.secondary-arrow-button>
                        </div>

                        <div class="col-md-6">
                            <x-Buttons.primary-arrow-button id="next-btn-1">Next </x-Buttons.primary-arrow-button>
                        </div>

                    </div>



                </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>