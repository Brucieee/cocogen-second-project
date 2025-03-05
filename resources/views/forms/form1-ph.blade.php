<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

        <style>
            html,
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                font-family: 'Inter', sans-serif;
            }

            .main-container {
                display: flex;
                height: 100%;
            }

            .account-container-1 {
                width: 775px;
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
                gap: 25px;
                width: 100%;
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

    <form id="form1" action="{{ route() }}" >
    <div class="main-container">
            <x-stepper :currentStep="session('currentStep', 1)" />

            <div class="account-container-1" id="account-form-1">
                <x-Register.back-button title="Create account as Policyholder" id="goBack"
                    backUrl="create-account-as" />
                @csrf
                <div class="account-form">
                    <x-Register.form-title title="Getting to know you" />

                    @php
                        $genders = ['Male', 'Female', 'Other'];
                    @endphp

                    <div class="account-form-contents">
                        <div class="form-row-1">
                            <x-Fields.text-field label="First Name" id="first_name" name="first_name" type="text"
                                placeholder="First Name" required="true" width="100%" />
                            <x-Fields.text-field label="Middle Name" id="middle_name" name="middle_name" type="text"
                                placeholder="Middle Name" width="100%" />
                            <x-Fields.text-field label="Last Name" id="last_name" name="last_name" type="text"
                                placeholder="Last Name" required="true" width="100%" />
                        </div>

                        <div class="form-row-2">
                            <x-fields.text-field type="date" id="date_of_birth" name="date_of_birth"
                                label="Date of Birth" placeholder="Date of Birth" width="100%" required />
                            <x-Fields.text-field label="Place of Birth" id="place_of_birth" name="place_of_birth"
                                type="text" placeholder="City, Region, Country" required="true" width="100%" />
                        </div>

                        <div class="form-row-3">
                            <x-fields.dropdown-field-2 
                                id="sex" 
                                name="sex" 
                                label="Sex" 
                                :options="$genders" 
                                placeholder="Select Sex" 
                                width="330px" 
                                required 
                            />

                            <x-fields.dropdown-field-2 id="citizenship" name="citizenship" label="Citizenship"
                                :options="['Filipino', 'American', 'Other']" placeholder="Select Citizenship" width="330px" required />
                        </div>

                        <div class="form-row-4">
                            <x-Fields.text-field label="Mobile" id="contact_number" name="contact_number" type="tel"
                                placeholder="(09XX) XXX-XXXX" required="true" width="100%" />
                            <x-Fields.text-field label="Email" id="email" name="email" type="email"
                                placeholder="Email" required="true" width="100%" />
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
                        <x-buttons.pill-button idOne="noOption" idTwo="yesOption" pillOneText="No" pillTwoText="Yes" />
                    </div>

                    <div class="next-cancel-btns">
                        <x-buttons.secondary-button id="cancelAction" data-target="create-account-as"> Cancel
                        </x-buttons.secondary-button>
                        <x-buttons.primary-button id="nextButton" data-target="create-account-as-ph-2"> Next
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
                let selectedOption = null;

                // Pill button animation
                $(document).on("click", ".pill-button", function(event) {
                    event.preventDefault();
                    $(".pill-button").removeClass("expanded");
                    $(this).addClass("expanded");
                    selectedOption = $(this).attr("id");
                });

                $(document).on("click", "#cancelAction, #goBack", function(event) {
                    event.preventDefault();
                    let targetPage = $(this).data("target");

                    if (targetPage) {
                        $("#dynamic-content").load(`/register/${targetPage}`);
                    } else {
                        window.history.back();
                    }
                });

                $('#form2').hide();

                $('#nextButton').on('click', function() {
                  $('#form1').fadeOut();
                  $('#form2').fadeIn();
                });

                $('#form1 input, #form1 select').on('input', function() {
                  let formData = {
                    firstName:$("#first_name").val();
                    middleName:$("#middle_name").val();
                    lastName:$("#last_name").val();


                    dateBirth:$("#date_of_birth").val();
                    placeBirth:$("#place_of_birth").val();

                    sex:$("#sex").val();
                    citizenship:$("#citizenship").val();

                    contact:$("#contact_number").val();
                    email:$("#email").val();
                  };
                  sessionStorage.setItem('form1Data', JSON.stringify(formData));
                });

                if(sessionStorage.getItem("form1Data")) {
                  let formData = JSON.parse(sessionStorage.getItem("form1Data"));
                  $('#first_name').val(formData.firstName);
                  $('#middle_name').val(formData.middleName);
                  $('#last_name').val(formData.lastName);

                  $('#date_of_birth').val(formData.dateBirth);
                  $('#place_of_birth').val(formData.placeBirth);

                  $('#sex').val(formData.sex);
                  $('#citizenship').val(formData.citizenship);

                  $('#contact_number').val(formData.contact);
                  $('#email').val(formData.email);
                }
            });
        </script>
    </body>
