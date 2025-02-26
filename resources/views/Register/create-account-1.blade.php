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

        .content-container {
            margin-top: 66px;
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px;
            flex-grow: 1;
        }

        .account-container-1 {
            width: 775px;
            height: 830px auto;
            top: 96px;
            left: 349px;
            padding: 35px;
            gap: 25px;
            display: flex;
            flex-direction: column;
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

        .stepper {
            position: fixed;
            /* Keeps it in place */
            width: 200px;
            /* Adjust as needed */
            top: 50%;
            right: 20px;
            /* Keeps it on the right */
            transform: translateY(-50%);
            /* Centers it vertically */
            display: block;
            /* Ensure it's visible */
            height: 100%;
        }
    </style>
</head>

<body>

    <div id="step1" class="stepper">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="account-container-1" id="account-form-1">
        <x-Register.back-button
            title="Create account as Policyholder"
            backUrl="{{ url()->previous() }}" />
        <div class="account-form">
            <x-Register.form-title
                title="Getting to know you" />
            <div class="account-form-contents">
                <div class="form-row-1">
                    <x-fields.text-field
                        id="first-name"
                        name="first-name"
                        label="First Name"
                        placeholder="First Name"
                        width="212px"
                        required />
                    <x-fields.text-field
                        id="middle-name"
                        name="middle-name"
                        label="Middle Name"
                        placeholder="Middle Name"
                        width="212px"
                        required />
                    <x-fields.text-field
                        id="last-name"
                        name="last-name"
                        label="Last Name"
                        placeholder="Last Name"
                        width="212px"
                        required />
                </div>
                <div class="form-row-2">
                    <x-fields.text-field
                        type="Date"
                        id="date-birth"
                        name="date-birth"
                        label="Date of Birth"
                        placeholder="Date of Birth"
                        width=100%
                        required />
                    <x-fields.text-field
                        id="place-birth"
                        name="-place-birth"
                        label="Place of Birth"
                        placeholder="Place of Birth"
                        width="330px"
                        required />
                </div>
                <div class="form-row-3">
                    <x-fields.dropdown-field-2
                        id="sex"
                        name="Sex"
                        label="Sex"
                        :options="['Female', 'Male', 'Other']"
                        placeholder="Female"
                        width="330px"
                        required />
                    <x-fields.dropdown-field-2
                        id="citizen"
                        name="Citizenship"
                        label="Citizenship"
                        :options="['Filipino', 'American', 'Other']"
                        placeholder="Filipino"
                        width="330px"
                        required />

                </div>
                <div class="form-row-4">
                    <x-fields.text-field
                        type="tel"
                        id="mobile"
                        name="Mobile"
                        label="Mobile"
                        placeholder="(09XX) XXX-XXXX"
                        width="330px"
                        required />
                    <x-fields.text-field
                        type="email"
                        id="email"
                        name="Email"
                        label="Email"
                        placeholder="name@gmail.com "
                        width="330px"
                        required />
                </div>
            </div>
            <div class="reminder">
                <x-Reminders.reminder-update-profile>
                    You may change your input data should you need to update your information. Note: Email address cannot be changed.
                    </x-reminder-update-profile>

            </div>

            <div class="existing-policy">
                <x-question-label
                    text="Do you have an existing policy with Cocogen?"
                    required="true"
                    size="16px"
                    weight="500" style="Inter" />

                <x-buttons.pill-button
                    id="existing-policy-pill"
                    :pillOneText="'No'"
                    :pillTwoText="'Yes'" />

            </div>
        </div>
        <div class="next-cancel-btns">
            <x-buttons.secondary-button
                id="prev-button">Cancel</x-buttons.secondary-button>
            <x-buttons.primary-button
                id="nextBtn1">Next</x-buttons.primary-button>
        </div>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>