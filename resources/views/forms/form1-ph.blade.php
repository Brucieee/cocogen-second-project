<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html,
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Inter', sans-serif;
        }

        form#form1 {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .main-container-form {
            height: 100%;
            width: 100%;
            display: flex;
        }
        .account-container-1 {
            width: 100%;
            max-width: 775px;
            /* Keep it centered */
            padding: 35px;
            display: flex;
            flex-direction: column;
            margin: auto;
        }


        .form-row-1,
        .form-row-3,
        .form-row-2,
        .form-row-4 {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 20px;
        }

        .account-form-contents {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .account-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .next-cancel-btns {
            display: flex;
            justify-content: space-between;
            gap: 25px;
        }

        .account-container-1 {
            gap: 25px;
        }
    </style>
</head>

<body>

    <form id="form1">

        <div class="main-container-form">
            <x-stepper :currentStep="session('currentStep', 1)" />
            <div class="account-container-1">
                <x-back-title title="Create account as Policyholder" id="backToAccountAsFromForm1" />
                <div class="account-form">
                    <x-Register.form-title title="Getting to know you" />

                    <div class="account-form-contents">
                        <div class="form-row-1">

                            <x-text-field label="First Name" id="firstName" type="text" placeholder="First Name"
                                required="true" />

                            <x-text-field label="Middle Name" id="middleName" type="text"
                                placeholder="Middle Name" />

                            <x-text-field label="Last Name" id="lastName" type="text" placeholder="Last Name"
                                required="true" />
                        </div>

                        <div class="form-row-2">

                            <x-text-field label="Date of Birth" id="dateOfBirth" type="date"
                                placeholder="Date of Birth" required="true" />

                            <x-text-field label="Place of Birth" id="placeOfBirth" type="text"
                                placeholder="City, Region, Country" />

                        </div>

                        <div class="form-row-3">

                            <x-dropdown id="sex" name="sex" label="Sex" :options="['Male', 'Female', 'Other']"
                                placeholder="Select Sex" required="true" />

                            <x-dropdown id="citizenship" name="citizenship" label="Citizenship" :options="['Filipino', 'American', 'Other']"
                                placeholder="Select Citizenship" required="true" />

                        </div>

                        <div class="form-row-4">

                            <x-text-field label="Mobile" id="contactNumber" type="number" placeholder="09XXXXXXXXX"
                                required="true" />
                            <x-text-field label="Email Address" id="email" type="email"
                                placeholder="Enter your email" required="true" />

                        </div>
                    </div>

                    <div class="reminder">
                        <x-Reminders.reminder-update-profile>
                            You may change your input data should you need to update your information. Note: Email
                            address cannot be changed.
                        </x-Reminders.reminder-update-profile>
                    </div>

                    <div class="existing-policy">
                        <x-question-label text="Do you have an existing policy with Cocogen?" required="true"
                            size="16px" weight=auto style="Inter" />
                        <x-buttons.pill-button idOne="noOptionForm1" idTwo="yesOptionForm1" pillOneText="No"
                            pillTwoText="Yes" />
                    </div>

                    <div class="next-cancel-btns">
                        <x-buttons.secondary-button id="cancelForm1">
                            Cancel
                        </x-buttons.secondary-button>

                        <x-buttons.primary-button id="nextForm1">
                            Next
                        </x-buttons.primary-button>

                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Back button functionality
            $('#backToAccountAsFromForm1').on('click', function() {
                $('#form1').hide();
                $('#accountAs').show();
            });

            $('#cancelForm1').on('click', function() {
                $('#form1').hide();
                $('#accountAs').show();
                sessionStorage.removeItem('form1Data'); 
            });

            // Pill button functionality
            let selectedOption = null;

            $(document).on("click", ".pill-button", function(event) {
                event.preventDefault();
                $(".pill-button").removeClass("expanded");
                $(this).addClass("expanded");
                selectedOption = $(this).attr("id");
            });

            // Next button functionality
            $('#nextForm1').on('click', function() {

                // Validate if an option is selected
                if (!selectedOption) {
                    alert('Please select an option (Yes or No) before proceeding.');
                    return;
                }

                // Save form data to sessionStorage
                let formData = {
                    firstName: $("#firstName").val(),
                    middleName: $("#middleName").val(),
                    lastName: $("#lastName").val(),
                    dateOfBirth: $("#dateOfBirth").val(),
                    placeOfBirth: $("#placeOfBirth").val(),
                    sex: $("#sex").val(),
                    citizenship: $("#citizenship").val(),
                    contactNumber: $("#contactNumber").val(),
                    email: $("#email").val(),

                };
                sessionStorage.setItem('form1Data', JSON.stringify(formData));

                // Navigate based on the selected option
                if (selectedOption === 'noOptionForm1') {
                    $('#form1').hide();
                    $('#form2').show(); // Show form2
                } else if (selectedOption === 'yesOptionForm1') {
                    $('#form1').hide();
                    $('#form2-1').show(); // Show form2.1
                }
            });

            // Load saved form data if it exists
            if (sessionStorage.getItem("form1Data")) {
                let formData = JSON.parse(sessionStorage.getItem("form1Data"));
                $('#firstName').val(formData.firstName);
                $('#middleName').val(formData.middleName);
                $('#lastName').val(formData.lastName);
                $('#dateOfBirth').val(formData.dateOfBirth);
                $('#placeOfBirth').val(formData.placeOfBirth);
                $('#sex').val(formData.sex);
                $('#citizenship').val(formData.citizenship);
                $('#contactNumber').val(formData.contactNumber);
                $('#email').val(formData.email);

                // Restore the selected pill button state
                if (formData.hasExistingPolicy === 'Yes') {
                    $('#yesOptionForm1').addClass('expanded');
                    selectedOption = 'yesOptionForm1';
                } else if (formData.hasExistingPolicy === 'No') {
                    $('#noOptionForm1').addClass('expanded');
                    selectedOption = 'noOptionForm1';
                }
            }
        });
    </script>
</body>
