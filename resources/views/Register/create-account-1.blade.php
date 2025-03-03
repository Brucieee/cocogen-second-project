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

        .account-container-1 {
            width: 775px;
            height: 830px auto;
            padding: 35px;
            gap: 25px;
            display: flex;
            flex-direction: column;
            margin: auto;
        }

        .form-row-1,
        .form-row-3 {
            justify-content: space-between;
            gap: 25px;
            display: flex;
        }

        .form-row-2,
        .form-row-3,
        .form-row-4 {
            display: flex;
            justify-content: space-between;
            gap: 35px;
            width: 100%;
        }

        .form-row-2>*,
        .form-row-3,
        .form-row-4>* {
            flex: 1;
        }

        .account-form-contents {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }

        .account-form {
            display: flex;
            gap: 25px;
            flex-direction: column;
        }

        .next-cancel-btns {
            justify-content: space-between;
            gap: 25px;
            display: flex;
        }

        .existing-policy {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }

        .create-account1 {
            display: flex;
            width: 100%;
            height: 100%;

        }
    </style>
</head>

<body>

    <div class="create-account1" id="form-container">

        <x-stepper :currentStep="session('currentStep', 1)" />

        <div class="account-container-1" id="account-form-1">
            <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />

            <div class="account-form">
                <x-Register.form-title title="Getting to know you" />

                <div class="account-form-contents">
<<<<<<< HEAD
                    <div class="form-row-1"><x-Fields.text-field
                            label="First Name"
                            id="first_name"
                            type="text"
                            placeholder="First Name"
                            required="true"
                            width="100%" />
                        <x-Fields.text-field
                            label="Middle Name"
                            id="middle_name"
                            type="text"
                            placeholder="Middle Name"
                            width="100%" />
                        <x-Fields.text-field
                            label="Last Name"
                            id="last_name"
                            type="text"
                            placeholder="Last Name"
                            required="true"
=======
                    <div class="form-row-1"><x-Fields.text-field label="First Name" id="first_name" type="text"
                            placeholder="First Name" required="true" width="100%" />
                        <x-Fields.text-field label="Middle Name" id="middle_name" type="text" placeholder="Middle Name"
>>>>>>> dedcde2d207251f318d3c8eeadaa875ea7db7b82
                            width="100%" />
                        <x-Fields.text-field label="Last Name" id="last_name" type="text" placeholder="Last Name"
                            required="true" width="100%" />
                    </div>

                    <div class="form-row-2">
                        <x-fields.text-field type="Date" id="date-birth" name="date-birth" label="Date of Birth"
                            placeholder="Date of Birth" width="100%" required />
                        <x-Fields.text-field label="Place of Birth" id="birth_place" type="text"
                            placeholder="City, Region, Country" required="true" width="100%" />
                    </div>

                    <div class="form-row-3">
                        <x-fields.dropdown-field-2 id="sex" name="Sex" label="Sex" :options="['Female', 'Male', 'Other']" placeholder="Female" width="330px" required />
                        <x-fields.dropdown-field-2 id="citizen" name="Citizenship" label="Citizenship"
                            :options="['Filipino', 'American', 'Other']" placeholder="Filipino" width="330px"
                            required />
                    </div>

                    <div class="form-row-4">
                        <x-Fields.text-field label="Mobile" id="contact_number" type="number"
                            placeholder="(09XX) XXX-XXXX" required="true" width="100%" />
                        <x-Fields.text-field label="Email" id="email" type="email" placeholder="Email" required="true"
                            width="100%" />
                    </div>
                </div>

                <div class="reminder">
                    <x-Reminders.reminder-update-profile>
                        You may change your input data should you need to update your information. Note: Email address
                        cannot be changed.
                        </x-reminder-update-profile>
                </div>

                <div class="existing-policy">
                    <x-question-label text="Do you have an existing policy with Cocogen?" required="true" size="16px"
                        weight="500" style="Inter" />

                    <x-buttons.pill-button idOne="button_policy_yes" idTwo="button_policy_no" pillOneText="No"
                        pillTwoText="Yes" />
                </div>
            </div>

            <div class="next-cancel-btns">
                <x-buttons.secondary-button id="button_cancel"> Cancel </x-buttons.secondary-button>
                <x-buttons.primary-button id="button_next_1">Next</x-buttons.primary-button>
            </div>

            <!-- Step 2 - No (Hidden by Default) -->
            <div id="step-2-no" style="display: none; ">
                @include('Register.create-account-2-2')
            </div>

            <!-- Step 2 - Yes (Hidden by Default) -->
            <div id="step-2-yes" style="display: none;">
                @include('Register.create-account-2')
            </div>
        </div>

    </div>
    <!-- Bootstrap and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        $(document).ready(function() {
            let selectedOption = null;

            $("#policy-yes-btn").click(function(event) {
                event.preventDefault();
                selectedOption = "yes";
                $(this).addClass("active");
                $("#policy-no-btn").removeClass("active");
            });

            $("#policy-no-btn").removeClass("active");
        });

        

    </script>
</body>