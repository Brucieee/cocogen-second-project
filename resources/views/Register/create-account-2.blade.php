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

        .create-account-2 {
            display: flex;
            flex-direction: column;
            width: 780px;
            height: 975px auto;
            padding: 35px;
            gap: 25px;
            margin: auto;
        }

        .account-form-2 {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }

        .policy-checkbox {
            display: flex;
            gap: 20px;
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

        .contact-representative {
            display: flex;
            gap: 35px;
            flex-direction: column;
        }

        .representatives {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }

        .branch-contact,
        .contact-type {
            display: flex;
            gap: 20px;
            flex-direction: column;
        }



        .contact-col-1 {
            display: flex;
            gap: 20px;
        }

        .next-cancel-btn-2 {
            display: flex;
            gap: 25px;
        }

        .icon-info {
            width: 20px;
            height: 21px;
            border-radius: 20px;
        }

        .label-icon {
            display: flex;
            gap: 10px;

        }

        .create-account2 {
            display: flex;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="create-account2" id="create-account2">
        <x-stepper :currentStep="session('currentStep', 1)" />


        <div class="create-account-2" id="form-2">
            <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />
            <div class="account-form-2">
                <x-Register.form-title title="Getting to know you" />
                <div class="policy-checkbox">
                    <x-question-label text="What policy are you interested in? " required="true" size="16px"
                        weight="500" style="Inter" info="You may select as many as you want" />

                    <div class="policy-checkboxes">
                        <div class="checkbox-col-1">
                            <div class="check-row-1">
                                <x-buttons.checkbox-button id="Auto-Excel" name="Auto-Excel" label="Auto Excel Plus"
                                    :checked=false />
                                <x-buttons.checkbox-button id="International-Travel" name="International-Travel"
                                    label="International Travel Plus" :checked=false />
                            </div>
                            <div class="check-row-2">
                                <x-buttons.checkbox-button id="Domestic-Travel" name="Domestic-Travel"
                                    label="Domestic Travel Plus" :checked=false />
                                <x-buttons.checkbox-button id="pro_tech" name="Pro-Tech" label="Pro-Tech"
                                    :checked=false />
                            </div>
                            <div class="check-row-3">
                                <x-buttons.checkbox-button id="condo-excel" name="condo-excel" label="Condo Excel Plus"
                                    :checked=false />
                            </div>
                            <div class="check-row-4">

                            </div>
                        </div>
                    </div>

                    <div class="contact-representative">
                        <div class="representatives">
                            <x-question-label text="Do you want to be contacted by a Cocogen Representative? "
                                required="true" size="16px" weight="500" style="Inter" info="" />
                            <div class="pill-btns">
                                <x-Buttons.pill-button idOne="pill-one-No-1" idTwo="pill-two-Yes-1"
                                    pillOneText="No, I will explore Cocogen products myself."
                                    pillTwoText="Yes, I need a representative to talk to me." />
                            </div>
                        </div>

                        <div class="branch-contact">
                            <div class="label-icon">
                                <x-question-label text="Which Cocogen branch should you wish to be contacted by?"
                                    required="true" size="16px" weight="500" style="Inter" info="" />

                                <x-info-icon />

                            </div>

                            <div class="branch-input">
                                <x-fields.dropdown-field-2 name="language" id="languageDropdown"
                                    label="Select one (1) Cocogen branch" placeholder="Type here to search"
                                    :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" :required="true"
                                    :width="'100%'" />

                            </div>
                        </div>

                        <div class="contact-type">
                            <x-question-label text="How do you want to be contacted? " required="true" size="16px"
                                weight="500" style="Inter" info="You may select more than one" icon="" />
                            <div class="checkbox-col-1">
                                <div class="checkbox-row">
                                    <x-buttons.checkbox-button id="email" name="email" label="Email" :checked=false />
                                    <x-buttons.checkbox-button id="sms" name="sms" label="SMS" :checked=false />
                                </div>
                                <div class="checkbox-row">
                                    <x-buttons.checkbox-button id="call" name="call" label="Call" :checked=false />
                                    <x-buttons.checkbox-button id="messenger" name="messenger" label="Messenger"
                                        :checked=false />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="next-cancel-btn-2">
                    <x-buttons.secondary-button id="button_cancel">Cancel</x-buttons.secondary-button>
                    <x-buttons.primary-button id="button_next_2">Next</x-buttons.primary-button>
                </div>
            </div>

            <div id="identity-step" style="display: none;">
                @include('Register.your-identity-1')
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".pill-button").on("click", function (event) {
                event.preventDefault(); // Prevents any default action (like form submission)

                const selectedId = $(this).attr("id");

                // Toggle button states
                $(".pill-button").removeClass("expanded");
                $(this).addClass("expanded");

                // Hide or show sections based on selected button
                if (selectedId === "pill-one-No-1") {
                    $(".branch-contact, .contact-type").slideUp();
                } else {
                    $(".branch-contact, .contact-type").slideDown();
                }

                return false;
            });

            // Ensure correct visibility on page load (in case of pre-selected values)
            if ($("#pill-one-No-1").hasClass("expanded")) {
                $(".branch-contact, .contact-type").hide();
            }

            // $("#nextBtn2").click(function(event) {
            //     event.preventDefault();
            //     $("#create-account2").html($("#identity-step").html());
            // });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>