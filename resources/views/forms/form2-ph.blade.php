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

        .main-container-wrapper {
            flex: 1;
            display: flex;
            justify-content: center; /* Center horizontally */
            margin-left: 255px; /* Offset for the stepper */
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

        .active-policies-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
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

        .create-account2-2 {
            display: flex;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>

<form action="{{ route() }}">
<div class="create-account2-2">
            <x-stepper :currentStep="session('currentStep', 1)" />

        <div class="main-container-wrapper">
            <div class="main-container">
                <x-Register.back-button title="Create account as Policyholder" id="goBack" backUrl="create-account-as-ph-1" />


                <div class="getting-to-know-you-container">
                    <x-Register.form-title title="Getting to know you" />

                    <div class="active-policies-container">
                        <x-title-required title="Active Policy/s you have" :required="true" />

                        <x-Fields.add-policy label="Policy No." required="true" />
                    </div>

                    <div class="representative-container">
                        <x-title-required title="Do you want to be contacted by a Cocogen Representative?"
                            :required="true" />

                        <div class="pill-button-container">
                            <x-Buttons.pill-button idOne="noRepresentative" idTwo="yesRepresentative"
                                pillOneText="No, I will explore Cocogen products myself"
                                pillTwoText="Yes, I need a representative to talk to me" />
                        </div>
                    </div>

                    <div class="branch-container">
                        <div class="title-container-2">
                            <x-title-required title="Which Cocogen branch should you wish to be contacted by?"
                                :required="true" />
                            <x-info-icon />
                        </div>
                    </div>

                    <div class="dropdown-container">
                        <x-fields.dropdown-field-2 label="Select one (1) Cocogen branch" id="selected_branch"
                            placeholder="Select branch" :required="true" width="'300px'"
                            :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" />
                    </div>
                </div>

                <div class="contact-container">
                    <x-title-required title="How do you want to be contacted?" :required="true"
                        placeholder="(You may select more than one)" />

                    <div class="main-contact-container">
                        <div class="left-container">
                            <x-Buttons.checkbox-button id="checkbox_email" label="Email" />
                            <x-Buttons.checkbox-button id="checkbox_SMS" label="SMS" />
                        </div>

                        <div class="right-container">
                            <x-Buttons.checkbox-button id="checkbox_messenger" label="Messenger" />
                            <x-Buttons.checkbox-button id="checkbox_call" label="Call" />
                        </div>
                    </div>
                </div>

                <div class="button-container">
                    <x-buttons.secondary-button id="cancelAction" data-target="create-account-as"> Cancel </x-buttons.secondary-button>
                    <x-buttons.primary-button id="submit" date-next="your-identity-1">Next</x-buttons.primary-button>
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
            console.log("Script Loaded"); // Debugging

            // Handle Pill Button Click
            $(document).on("click", ".pill-button", function(event) {
                event.preventDefault();

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

            $('#form2').on('submit', function(e) {
                e.preventDefault();

                let form1Data = JSON.parse(sessionStorage.getItem('form1Data')) || {};
                let form2Data = {
                    branch: $('#selected_branch').val(),
                    
                }
            })

        });
    </script>
</body>