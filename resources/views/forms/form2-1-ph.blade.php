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
            gap: 35px;
            align-self: stretch;
            margin: 0;
        }

        .policy-field {
            width: 710px; /* Ensure it takes the same width as the pill buttons */
        }

        .representative-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
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
        }

        .title-container-2 {
            display: flex;
            align-items: center;
            gap: 10px;
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

    <form id="form2-1">
        <div class="create-account2-1">
            <x-stepper :currentStep="session('currentStep', 1)" />

            <div class="main-container-wrapper2-1">
                <div class="main-container">
                    <x-back-title title="Create account as Policyholder" id="backtoForm1FromForm2-1" />


                    <div class="getting-to-know-you-container">
                        <x-Register.form-title title="Getting to know you" />

                        <div class="active-policies-container">
                            <x-title-required title="Active Policy/s you have" :required="true" />

                            <div id="policyFieldsContainer">
                                <x-add-policy label="Policy No." required="true" />
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
                                <x-title-required title="Which Cocogen branch should you wish to be contacted by?" />
                                <x-info-icon />
                            </div>
                        </div>

                        <!-- Dropdown Container -->
                        <div class="dropdown-container">

                            <x-dropdown id="branch" name="branch" label="Select one (1) Cocogen branch"
                                :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" placeholder="Select branch" />

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

            $('#backtoForm1FromForm2-1').on('click', function() {
                event.preventDefault();
                $('#form2-1').hide();
                $('#form1').show();
            });

            $(document).on("click", ".pill-button", function(event) {
                event.preventDefault();

                // Get the parent form of the clicked button
                let form = $(this).closest("form");

                form.find(".pill-button").removeClass("expanded");
                $(this).addClass("expanded");

                // Handle logic separately for each form
                if (this.id === "noRepresentativeForm2" || this.id === "noRepresentativeForm2-1") {
                    form.find(".branch-container, .dropdown-container, .contact-container").fadeOut(300,
                        function() {
                            form.find(".contact-container input[type='checkbox']").prop("checked",
                                false);
                            form.find("#branch").val(""); // Reset branch dropdown
                        });
                } else {
                    form.find(".branch-container, .dropdown-container, .contact-container").fadeIn(300);
                }
            });

            $('#form2-1').on('submit', function(e) {
                e.preventDefault();
                let form = $(this)

                let policyNumbers = [];
                let allValid = true;
                let form1Data = JSON.parse(sessionStorage.getItem('form1Data')) || {};  
                let form2Data = {
                    policies: policyNumbers,

                    branch: needsRepresentative ? (form.find('#branch').val() || "None") : "None",

                    contactEmail: needsRepresentative && form.find('#contactEmail').is(':checked') ? "yes" : "no",
                    contactSMS: needsRepresentative && form.find('#contactSMS').is(':checked') ? "yes" : "no",
                    contactMessenger: needsRepresentative && form.find('#contactMessenger').is(':checked') ? "yes" : "no",
                    contactCall: needsRepresentative && form.find('#contactCall').is(':checked') ? "yes" : "no",
                };

                $('.policy-field input').each(function() {
                    if (!$(this).val()) {
                        allValid = false;
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                    policyNumbers.push($(this).val());
                });

                if (!allValid) {
                    alert('Please fill in all required fields.');
                    return;
                }

                let combinedData = {
                            ...form1Data,
                            ...form2Data
                        };
                
                $.ajax({
                    url: '/submit-step1',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log('Form submitted successfully:', response);
                        alert('Form submitted successfully');
                        // Handle success logic
                    },
                    error: function(xhr, status, error) {
                        console.error("Submit error:", xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>
