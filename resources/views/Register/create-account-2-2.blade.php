<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        /* Global Styles */
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
            box-shadow: 4px 0 8px rgba(0, 0, 0, 0.1);
        }

        .content-container {
            margin-top: 66px;
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px;
            flex-grow: 1;
        }

        /* Main Container */
        .main-container {
            display: inline-flex;
            padding: 35px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #F7FCFF);
        }

        /* Getting to Know You Container */
        .getting-to-know-you-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
        }

        /* Active Policies Container */
        .active-policies-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
        }

        /* Representative Container */
        .representative-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
            align-self: stretch;
        }

        /* Pill Button Container */
        .pill-button-container {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        /* Branch Container */
        .branch-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            align-self: stretch;
        }

        /* Dropdown Container */
        .dropdown-container {
            display: flex;
            align-items: flex-end;
            gap: 20px;
            align-self: stretch;
        }

        /* Contact Container */
        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
        }

        /* Main Contact Container */
        .main-contact-container {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        /* Left and Right Containers */
        .left-container,
        .right-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        /* Button Container */
        .button-container {
            display: flex;
            align-items: flex-start;
            gap: 25px;
            align-self: stretch;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <!-- Back Button Component -->
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />

        <!-- Getting to Know You Container -->
        <div class="getting-to-know-you-container">
            <!-- Form Title Component -->
            <x-Register.form-title title="Getting to know you" />

            <!-- Active Policies Container -->
            <div class="active-policies-container">
                <!-- Title for Active Policies -->
                <x-title-required title="Active Policy/s you have" :required="true" />

                <!-- Policy Fields -->
                <x-Fields.add-policy label="Policy No." required="true" />
            </div>

            <!-- Representative Container -->
            <div class="representative-container">
                <!-- Title for Representative -->
                <x-title-required title="Do you want to be contacted by a Cocogen Representative?" :required="true" />

                <!-- Pill Button Container -->
                <div class="pill-button-container">
                    <x-Buttons.pill-button pillOneText="No, I will explore Cocogen products myself" pillTwoText="Yes, I need a representative to talk to me" />
                </div>
            </div>

            <!-- Branch Container -->
            <div class="branch-container">
                <!-- Title for Branch -->
                <x-title-required
                    title="Which Cocogen branch should you wish to be contacted by?"
                    :required="true" />

                <!-- Dropdown Container -->
                <div class="dropdown-container">
                    <x-fields.dropdown-field-2
                        label="Select one (1) Cocogen branch"
                        id="selected_branch"
                        placeholder="Select branch"
                        :required="true"
                        :width="'300px'"
                        :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" />
                </div>
            </div>

            <!-- Contact Container -->
            <div class="contact-container">
                <!-- Title for Contact -->
                <x-title-required
                    title="How do you want to be contacted?"
                    :required="true"
                    placeholder="(You may select more than one)" />

                <!-- Main Contact Container -->
                <div class="main-contact-container">
                    <!-- Left Container -->
                    <div class="left-container">
                        <x-Buttons.checkbox-button label="Email" />
                        <x-Buttons.checkbox-button label="SMS" />
                    </div>

                    <!-- Right Container -->
                    <div class="right-container">
                        <x-Buttons.checkbox-button label="Messenger" />
                        <x-Buttons.checkbox-button label="Call" />
                    </div>
                </div>
            </div>

            <!-- Button Container -->
            <div class="button-container">
                <x-buttons.secondary-button>Cancel</x-buttons.secondary-button>
                <x-buttons.primary-button>Next</x-buttons.primary-button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
