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

        .create-account2-2 {
            display: flex;
            height: 100vh;
            /* Ensure it takes the full viewport height */
            width: 100%;
            /* Ensure it takes the full viewport width */
            position: relative;
            /* Ensure it's positioned relative to the viewport */
        }

        .main-container-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            padding: 35px;
            margin-left: 35%;
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

        .policy-checkbox {
            display: flex;
            gap: 35px;
            flex-direction: column;
        }

        .checkbox-col-1 {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .check-row-1,
        .check-row-3,
        .check-row-2 {
            display: flex;
            gap: 10px;
            justify-content: space-between;
            flex-direction: column;
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
    </style>
</head>

<body>
    <div class="create-account2-2">
        <!-- Stepper Container -->
        <x-stepper :currentStep="session('currentStep', 1)" />


        <!-- Main Container Wrapper -->
        <div class="main-container-wrapper">
            <div class="main-container">
                <!-- Back Button Component -->
                <x-back-title title="Create account as Policyholder" id="goBack"

                <!-- Getting to Know You Container -->
                <div class="getting-to-know-you-container">
                    <!-- Form Title Component -->
                    <x-Register.form-title title="Getting to know you" />

                    <!-- Active Policies Container -->
                    <div class="policy-checkboxes">
                        <x-question-label text="What policy are you interested in? " required="true" size="16px"
                            weight="500" info="You may select as many as you want" />

                        <div class="checkbox-col-1">
                            <div class="check-row-1">
                                <x-buttons.checkbox-button id="policy_AEP" name="AutoExcelPlus" label="Auto Excel Plus"
                                    :checked=false />
                                <x-buttons.checkbox-button id="policy_ITP" name="InternationalTravelPlus"
                                    label="International Travel Plus" :checked=false />
                            </div>
                            <div class="check-row-2">
                                <x-buttons.checkbox-button id="policy_DTP" name="DomesticTravelPlus"
                                    label="Domestic Travel Plus" :checked=false />
                                <x-buttons.checkbox-button id="policy_PT" name="ProTech" label="Pro-Tech"
                                    :checked=false />
                            </div>
                            <div class="check-row-3">
                                <x-buttons.checkbox-button id="policy_CEP" name="CondoExcelPlus"
                                    label="Condo Excel Plus" :checked=false />
                            </div>
                        </div>
                    </div>

                    <!-- Representative Container -->
                    <div class="representative-container">
                        <!-- Title for Representative -->
                        <x-title-required title="Do you want to be contacted by a Cocogen Representative?"
                            :required="true" />

                        <!-- Pill Button Container -->
                        <div class="pill-button-container">
                            <x-Buttons.pill-button idOne="noRepresentative" idTwo="yesRepresentative"
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
                        <x-fields.dropdown-field-2 label="Select one (1) Cocogen branch" id="branch"
                            placeholder="Select branch" :required="true" width="'300px'" :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" />
                    </div>
                </div>

                <!-- Contact Container -->
                <div class="contact-container">
                    <!-- Title for Contact -->
                    <x-title-required title="How do you want to be contacted?" :required="true"
                        placeholder="(You may select more than one)" />

                    <!-- Main Contact Container -->
                    <div class="main-contact-container">
                        <!-- Left Container -->
                        <div class="left-container">
                            <x-Buttons.checkbox-button id="contact_email" label="Email" />
                            <x-Buttons.checkbox-button id="contact_sms" label="SMS" />
                        </div>

                        <!-- Right Container -->
                        <div class="right-container">
                            <x-Buttons.checkbox-button id="contact_messenger" label="Messenger" />
                            <x-Buttons.checkbox-button id="contact_call" label="Call" />
                        </div>
                    </div>
                </div>

                <!-- Button Container -->
                <div class="button-container">
                    <x-buttons.secondary-button id="cancelAction" data-target="create-account-as"> Cancel
                    </x-buttons.secondary-button>
                    <x-buttons.primary-button id="submit"
                        date-next="create-account-as-ph-identity-1">Next</x-buttons.primary-button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log("Script Loaded"); // Debugging

            // Handle Pill Button Click
            $(document).on("click", ".pill-button", function(event) {
                event.preventDefault();
                console.log("Pill Button Clicked:", this.id); // Debugging

                $(".pill-button").removeClass("expanded");
                $(this).addClass("expanded");

                if (this.id === "noRepresentative") {
                    $(".branch-container, .dropdown-container, .contact-container").fadeOut(300,
                        function() {
                            $(".contact-container input[type='checkbox']").prop("checked", false);
                        });
                } else {
                    $(".branch-container, .dropdown-container, .contact-container").fadeIn(300);
                }
            });
        });
    </script>
</body>
