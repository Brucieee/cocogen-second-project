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

        .form-container {
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

        .create-account-2 {

            height: 847px;
            width: 710px;
            margin: auto;
            display: none;
            margin-left: 700px;
        }

        .question {
            margin-top: 35px;
            margin-bottom: 20px;

        }
    </style>
    <script>
                $(document).ready(function() {
                    $('#primary-button-1').click(function(){
                        $("#container-form-1").hide();
                        $("#container-form-2").show();
                    })
                    
                });
            </script>
</head>

<body>

    <div class="create-account-1" id="container-form-1">
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

            <div class="create-account-2" id="container-form-2">

                <div class="container py-4" style="margin-top:35px;">
                    <x-createaccount.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
                </div>

                <div class="container-form-2">
                    <div class="form-title" style="margin-left:35px;">
                        <x-CreateAccount.form-title title="Getting to know you" />
                    </div>

                    <p class="question">What policy are you interested in?<span class="asterisk-policy">*</span>(you may select as many as you want)</p>

                    <div class="row">
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Excel-Plus"
                                label="Auto Excel Plus"
                                checked="false" />
                        </div>
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Furtect"
                                label="Furtect"
                                checked="false" />
                        </div>
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Condo-Excel"
                                label="Condo Excel"
                                checked="false" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Travel-Plus"
                                label="International Travel Plus"
                                checked="false" />
                        </div>
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Bonds"
                                label="Bonds"
                                checked="false" />
                        </div>
                        <div class="col">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Dtravel-Plus"
                                label="Domestic Travel Plus"
                                checked="false" />
                        </div>
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="Hack-Guard"
                                label="Hack Guard"
                                checked="false" />
                        </div>
                        <div class="col">

                        </div>
                    </div>

                    <div class="row">
                        <p class="question">Do you want to be contacted by a Cocogen Representative? <span class="asterisk-policy">*</span></p>

                        <div class="col">
                            <x-Buttons.pill-button
                                id="contacted-pill"
                                :pillOneText="'No, I will explore Cocogen products myself'"
                                :pillTwoText="'Yes, I need a representative to talk to me'" />
                        </div>
                    </div>

                    <p class="question">Which Cocogen branch should you wish to be contacted by? <span class="asterisk-policy">*</span></p>

                    <div class="row d-flex align-items-center">
                        <div class="col-md-6">
                            <x-fields.dropdown-field
                                name="Branch"
                                label="Select (1) Cocogen branch"
                                :options="['Pasig Branch' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                                width="345px"
                                height="56px"
                                required />
                        </div>

                        <div class="col-md-6">
                            <x-fields.dropdown-field
                                name="Availability"
                                label="Hours you are available to be contacted"
                                :options="['Morning' => 'Morning', 'Afternoon', 'Evening']"
                                width="345px"
                                height="56px"
                                required />
                        </div>
                    </div>



                    <p class="question">How do you want to be contacted? <span class="asterisk-policy">*</span>(You may select more than one)</p>
                    <div class="row">
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="email"
                                label="Email"
                                checked="false" />
                            <x-buttons.checkbox-button
                                id="sms"
                                label="SMS"
                                checked="false" />
                            <x-buttons.checkbox-button
                                id="call"
                                label="Call"
                                checked="false" />
                        </div>
                        <div class="col">
                            <x-buttons.checkbox-button
                                id="messenger"
                                label="Messenger"
                                checked="false" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:35px; margin-bottom:35px;">
                        <div class="col-md-6">
                            <x-Buttons.secondary-button>Cancel </x-Buttons.secondary-button>
                        </div>

                        <div class="col-md-6">
                            <x-Buttons.primary-button>Next </x-Buttons.primary-button>
                        </div>

                    </div>
                </div>
            </div>



            <!-- Add Bootstrap JavaScript (optional) -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            
</body>