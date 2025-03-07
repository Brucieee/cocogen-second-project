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

        form#form2 {
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
            margin-left: 255px;
            /* Added to ensure content doesn't overlap with stepper */
            width: calc(100% - 255px);
            /* Adjust width to account for stepper */
            justify-content: center;
            padding: 20px;
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
            margin-bottom: 35px;
            ;
        }

        .policy-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, auto);
            gap: 15px;
            width: 100%;
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
            <!-- Stepper on the left side -->
            <x-stepper :currentStep="session('currentStep', 1)" />


            <div class="main-container-wrapper2-1">
                <div class="main-container">
                    <x-back-title title="Create account as Policyholder" id="backtoForm1FromForm2" />

                    <div class="policy-checkboxes">
                        <x-Register.form-title title="Getting to know you" />

                        <div class="active-policies-container">
                            <x-question-label text="What policy are you interested in? " required="true" size="16px"
                                weight="500" info="You may select as many as you want" />

                            <!-- Reorganized checkbox grid: 2 rows, 3 columns -->
                            <div class="policy-grid">
                                <!-- Row 1 -->
                                <x-checkbox id="AutoExcelPlus" name="AutoExcelPlus" label="Auto Excel Plus"
                                    value="yes" />
                                <x-checkbox id="InternationalTravelPlus" name="InternationalTravelPlus"
                                    label="International Travel Plus" value="yes" />
                                <x-checkbox id="DomesticTravelPlus" name="DomesticTravelPlus"
                                    label="Domestic Travel Plus" value="yes" />

                                <!-- Row 2 -->
                                <x-checkbox id="ProTech" name="ProTech" label="Pro-Tech" value="yes" />
                                <x-checkbox id="CondoExcelPlus" name="CondoExcelPlus" label="Condo Excel Plus"
                                    value="yes" />
                                <!-- Empty cell for alignment -->
                                <div></div>
                            </div>
                        </div>

                        <div class="representative-container">
                            <x-title-required title="Do you want to be contacted by a Cocogen Representative?"
                                :required="true" />

                            <div class="pill-button-container">
                                <x-Buttons.pill-button idOne="noRepresentativeForm2" idTwo="yesRepresentativeForm2"
                                    pillOneText="No, I will explore Cocogen products myself"
                                    pillTwoText="Yes, I need a representative to talk to me" />
                            </div>
                        </div>

                        <!-- Branch Container -->
                        <div class="branch-container">
                            <div class="title-container-2">
                                <x-title-required title="Which Cocogen branch should you wish to be contacted by?"
                                    :required="false" />
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
    $('#backtoForm1FromForm2').on('click', function(event) {
        event.preventDefault();
        $('#form2').hide();
        $('#form1').show();
    });

    // Handle Pill Button Click
    $(document).on("click", ".pill-button", function(event) {
        event.preventDefault();

        // Get the parent form of the clicked button
        let form = $(this).closest("form");

        // Remove 'expanded' class from all buttons inside the same form
        form.find(".pill-button").removeClass("expanded");
        $(this).addClass("expanded");

        // Handle logic separately for each form
        if (this.id === "noRepresentativeForm2" || this.id === "noRepresentativeForm2-1") {
            form.find(".branch-container, .dropdown-container, .contact-container").fadeOut(300,
                function() {
                    form.find(".contact-container input[type='checkbox']").prop("checked", false);
                });
        } else {
            form.find(".branch-container, .dropdown-container, .contact-container").fadeIn(300);
        }
    });

    $('#form2').on('submit', function(e) {
        e.preventDefault();
        let form = $(this); // Reference the current form

        let needsRepresentative = form.find('#yesRepresentativeForm2').hasClass('expanded');
        
        let form1Data = JSON.parse(sessionStorage.getItem('form1Data')) || {};
        let form2Data = {
            AutoExcelPlus: form.find('#AutoExcelPlus').is(':checked') ? "yes" : "no",
            InternationalTravelPlus: form.find('#InternationalTravelPlus').is(':checked') ? "yes" : "no",
            DomesticTravelPlus: form.find('#DomesticTravelPlus').is(':checked') ? "yes" : "no",
            ProTech: form.find('#ProTech').is(':checked') ? "yes" : "no",
            CondoExcelPlus: form.find('#CondoExcelPlus').is(':checked') ? "yes" : "no",
            
            branch: needsRepresentative ? (form.find('#branch').val() || "None") : "None",

            contactEmail: needsRepresentative && form.find('#contactEmail').is(':checked') ? "yes" : "no",
            contactSMS: needsRepresentative && form.find('#contactSMS').is(':checked') ? "yes" : "no",
            contactMessenger: needsRepresentative && form.find('#contactMessenger').is(':checked') ? "yes" : "no",
            contactCall: needsRepresentative && form.find('#contactCall').is(':checked') ? "yes" : "no",
            

            needsRepresentative: needsRepresentative ? "yes" : "no"
        };

        let combinedData = {
            ...form1Data,
            ...form2Data
        };

        $.ajax({
            url: '/submit-step1',
            type: 'POST',
            data: combinedData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log('Step 1 submitted successfully:', response);
                if (response.id) {
                    sessionStorage.setItem("submittedID", response.id);
                    $('#form2').fadeOut(function() {
                        $('#form3').fadeIn();
                    });
                } else {
                    alert('Error: No ID returned from server.');
                }
                sessionStorage.removeItem("form1Data");
            },
            error: function(xhr, status, error) {
                let errorMsg = '';
                console.error("Submit error:", xhr.responseText);
                
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let errors = xhr.responseJSON.errors;
                    for (let field in errors) {
                        errorMsg += field + ': ' + errors[field].join(', ') + '\n';
                    }
                    alert('Validation errors:\n' + errorMsg);
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    alert('Error: ' + xhr.responseJSON.message);
                } else {
                    alert('An unexpected error occurred: ' + error);
                }
            }
        });
    });
});
    </script>
</body>
