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
            flex-direction: row;
        }

        form#form2-1 {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        .stepper-container {
            width: 255px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #008080;
            padding: 35px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 50px;
            z-index: 1000;
        }

        .main-container-wrapper2-1 {
            display: flex;
            margin: auto;
        }

        .main-container {
            display: inline-flex;
            padding: 35px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #fff);
            width: 780px;
        }

        .getting-to-know-you-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
        }

        .active-policies-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            align-self: stretch;
            margin-top: 35px;
        }

        .representative-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            align-self: stretch;
            margin-bottom: 35px;
        }

        .pill-button-container {
            display: flex;
            gap: 22px;
            flex-direction: column;
            width: 710px;
            align-items: flex-start;
        }

        .branch-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            align-self: stretch;
            margin-bottom: 20px;
        }

        .title-container-1 {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        .dropdown-container {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            align-self: stretch;
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        .main-contact-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .left-container,
        .right-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .button-container {
            display: flex;
            align-items: flex-start;
            gap: 25px;
            align-self: stretch;
        }

        .create-account2-1 {
            display: flex;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>

    <form id="form2" style="display: none;">
        <div class="create-account2-1">
            <x-stepper :currentStep="session('currentStep', 1)" />

            <div class="main-container-wrapper2-1">
                <div class="main-container">
                    <x-back-title title="Create account as Policyholder" id="backtoForm1FromForm2" />


                    <div class="policy-checkboxes">
                        <x-Register.form-title title="Getting to know you" />

                        <div class="active-policies-container">
                            <x-question-label text="What policy are you interested in? " required="true" size="16px"
                                weight="500" info="You may select as many as you want" />

                            <div class="checkbox-col-1">
                                <div class="check-row-1">

                                    <x-checkbox id="AutoExcelPlus" name="AutoExcelPlus" label="Auto Excel Plus"
                                        value="yes" />

                                    <x-checkbox id="InternationalTravelPlus" name="InternationalTravelPlus"
                                        label="International Travel Plus" value="yes" />

                                </div>
                                <div class="check-row-2">

                                    <x-checkbox id="DomesticTravelPlus" name="DomesticTravelPlus"
                                        label="Domestic Travel Plus" value="yes" />

                                    <x-checkbox id="ProTech" name="ProTech" label="Pro-Tech" value="yes" />

                                </div>
                                <div class="check-row-3">

                                    <x-checkbox id="CondoExcelPlus" name="CondoExcelPlus" label="Condo Excel Plus"
                                        value="yes" />

                                </div>
                            </div>
                        </div>

                        <div class="representative-container">
                            <x-title-required title="Do you want to be contacted by a Cocogen Representative?"
                                :required="true" />

                            <div class="pill-button-container">
                                <x-Buttons.pill-button idOne="noRepresentativeForm2-1" idTwo="yesRepresentativeForm2-1"
                                    pillOneText="No, I will explore Cocogen products myself"
                                    pillTwoText="Yes, I need a representative to talk to me" />
                            </div>
                        </div>

                        <!-- Branch Container -->
                        <div class="branch-container">
                            <div class="title-container-2">
                                <x-title-required title="Which Cocogen branch should you wish to be contacted by?"
                                    :required="true" />
                                <x-info-icon />
                            </div>
                        </div>

                        <!-- Dropdown Container -->
                        <div class="dropdown-container">

                            <x-dropdown id="branch" name="branch" label="Select one (1) Cocogen branch"
                                :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" placeholder="Select branch" required="true" />

                        </div>
                    </div>

                    <div class="contact-container">
                        <!-- Title for Contact -->
                        <x-title-required title="How do you want to be contacted?" :required="true"
                            placeholder="(You may select more than one)" />

                        <!-- Main Contact Container -->
                        <div class="main-contact-container">
                            <!-- Left Container -->
                            <div class="left-container">

                                <x-checkbox id="contactEmail" name="contactEmail" label="Email" value="yes" />

                                <x-checkbox id="contactSMS" name="contactSMS" label="SMS" value="yes" />

                            </div>

                            <!-- Right Container -->
                            <div class="right-container">

                                <x-checkbox id="contactMessenger" name="contactMessenger" label="Messenger"
                                    value="yes" />

                                <x-checkbox id="contactCall" name="contactCall" label="Call" value="yes" />

                            </div>
                        </div>
                    </div>

                    <div class="button-container">
                        <x-buttons.secondary-button id="cancelForm2-1">
                            Cancel
                        </x-buttons.secondary-button>

                        <x-buttons.primary-button type="submit" id="submitForm2-1">
                            Next
                        </x-buttons.primary-button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#backtoForm1FromForm2').on('click', function() {
                event.preventDefault();
                $('#form2').hide();
                $('#form1').show();
            });

            // Handle Pill Button Click
            $(document).on("click", ".pill-button", function(event) {
                event.preventDefault();

                $(".pill-button").removeClass("expanded");
                $(this).addClass("expanded");

                if (this.id === "noRepresentativeForm2-1") {
                    $(".branch-container, .dropdown-container, .contact-container").fadeOut(300,
                        function() {
                            $(".contact-container input[type='checkbox']").prop("checked", false);
                        });
                } else {
                    $(".branch-container, .dropdown-container, .contact-container").fadeIn(300);
                }
            });

            $('#form2').on('submit', function(e) {
                e.preventDefault();

                let form1Data = JSON.parse(sessionStorage.getItem('form1Data')) || {};
                let form2Data = {
                    AutoExcelPlus: $('#AutoExcelPlus').is(':checked') ? 'yes' : 'no',
                    InternationalTravelPlus: $('#InternationalTravelPlus').is(':checked') ? 'yes' : 'no',
                    DomesticTravelPlus: $('#DomesticTravelPlus').is(':checked') ? 'yes' : 'no',
                    ProTech: $('#ProTech').is(':checked') ? 'yes' : 'no',
                    CondoExcelPlus: $('#CondoExcelPlus').is(':checked') ? 'yes' : 'no',
                    branch: $('#branch').val(),
                    contactEmail: $('#contactEmail').is(':checked') ? 'yes' : 'no',
                    contactSMS: $('#contactSMS').is(':checked') ? 'yes' : 'no',
                    contactMessenger: $('#contactMessenger').is(':checked') ? 'yes' : 'no',
                    contactCall: $('#contactCall').is(':checked') ? 'yes' : 'no'
                };


                let combinedData = {
                    ...form1Data,
                    ...form2Data
                };

                $.ajax({
                    url: '/submit-step1', // Adjust to your backend route
                    type: 'POST',
                    data: combinedData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token here
                    },
                    success: function(response) {
                        console.log('Step 1 submitted successfully:', response); // Debugging
                        if (response.id) {
                            sessionStorage.setItem("submittedID", response
                                .id); // Store the ID for Form 3 submission
                            $('#form2').fadeOut(function() {
                                $('#form3').fadeIn(); // Show Form 3 after Form 2 is hidden
                            });
                        } else {
                            alert('Error: No ID returned from server.');
                        }
                        sessionStorage.removeItem(
                            "form1Data"); // Clear Form 1 data after submit
                    },
                    error: function(xhr, status, error) {
                        let errors = xhr.responseJSON.errors;
                        if (errors && errors.email) {
                            alert('Validation error: ' + errors.email[0]); // Show email error
                        } else {
                            alert('An error occurred: ' + error);
                        }
                        console.error(xhr.responseText); // Log the error response
                    }
                });
            })
        });
    </script>
</body>
