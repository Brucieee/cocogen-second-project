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
            box-shadow: 4px 0 8px rgba(0, 0, 0, 0.1);
        }

        .content-container {
            margin-top: 66px;
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px;
            flex-grow: 1;
        }
    </style>
</head>

<body>

    <div style="display: inline-flex; padding: 35px; flex-direction: column; align-items: flex-start; gap: 25px; border-radius: 8px; background: var(--Surfaces-LVL-0, #F7FCFF);">

        <!-- Back Button Component -->
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />

        <!-- Getting to Know You Container -->
        <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 35px; align-self: stretch;">

            <!-- Form Title Component -->
            <x-Register.form-title title="Getting to know you" />

            <!-- Active Policies Container -->
            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 35px; align-self: stretch;">

                <!-- Title for Active Policies -->
                <x-title-required title="Active Policy/s you have" :required="true" />

                <!-- Policy Fields -->
                <x-Fields.add-policy label="Policy No." required="true" />


            </div>

            <!-- Representative Container -->
            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 35px; align-self: stretch;">

                <!-- Title for Representative -->
                <x-title-required title="Do you want to be contacted by a Cocogen Representative?" :required="true" />

                <!-- Pill Button Container -->
                <div style="display: flex; align-items: center; gap: 22px;">
                    <x-Buttons.pill-button pillOneText="No, I will explore Cocogen products myself" pillTwoText="Yes, I need a representative to talk to me" />
                </div>

            </div>

            <!-- Branch Container -->
            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 35px; align-self: stretch;">

                <!-- Title for Branch -->
                <x-title-required title="Which Cocogen branch should you wish to be contacted by?" :required="true" />

                <!-- Dropdown Container -->
                <div style="display: flex; align-items: flex-end; gap: 20px; align-self: stretch;">
                    <x-fields.dropdown-field-2
                        label="Select one (1) Cocogen branch*"
                        id="selected_branch"
                        placeholder="Select branch"
                        :required="true"
                        :width="'300px'"
                        :options="['Alabang Branch', 'Makati Branch', 'Pasig Branch']" />
                </div>

            </div>

            <!-- Contact Container -->
            <div style="display: flex; flex-direction: column; align-items: flex-start; gap: 20px;">

                <!-- Title for Contact -->
                <x-title-required title="How do you want to be contacted?" :required="true" placeholder="(You may select more than one)" />

                <!-- Checkbox Container -->
                <div style="display: flex; align-items: flex-start; gap: 20px; display: flex; flex-direction: column; align-items: flex-start; gap: 10px;">
                    <x-Buttons.checkbox-button label="Email" />
                    <x-Buttons.checkbox-button label="Phone" />
                    <x-Buttons.checkbox-button label="SMS" />
                    <x-Buttons.checkbox-button label="Mail" />
                </div>

            </div>

        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>