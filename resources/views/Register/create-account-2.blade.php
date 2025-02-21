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
            display: none;
        }
    </style>
</head>

<body>


    <div class="create-account-2" id="form-2">

        <div class="container py-4" style="margin-top:35px;">
            <x-Register.back-button title="Create account as a Policyholder" backUrl="{{ url()->previous() }}" />
        </div>

        <div class="container-form-2">
            <div class="form-title" style="margin-left:35px;">
                <x-Register.form-title title="Getting to know you" />
            </div>

            <p class="question">What policy are you interested in?<span class="asterisk-policy">*</span>(you may select as many as you want)</p>

            <div class="row">
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Excel-Plus"
                        label="Auto Excel Plus"
                        checked="false" />
                </div>
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Furtect"
                        label="Furtect"
                        checked="false" />
                </div>
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Condo-Excel"
                        label="Condo Excel"
                        checked="false" />
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Travel-Plus"
                        label="International Travel Plus"
                        checked="false" />
                </div>
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Bonds"
                        label="Bonds"
                        checked="false" />
                </div>
                <div class="col">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Dtravel-Plus"
                        label="Domestic Travel Plus"
                        checked="false" />
                </div>
                <div class="col">
                    <x-buttons.checkbox-button
                        id="Hack-Guard"
                        label="Hack Guard"
                        checked="false" />
                </div>
                <div class="col">

                </div>
            </div>

            <div class="row">
                <p class="question">Do you want to be contacted by a Cocogen Representative? <span class="asterisk-policy">*</span></p>

                <div class="col">
                    <x-Buttons.pill-button
                        id="contacted-pill"
                        :pillOneText="'No, I will explore Cocogen products myself'"
                        :pillTwoText="'Yes, I need a representative to talk to me'" />
                </div>
            </div>

            <p class="question">Which Cocogen branch should you wish to be contacted by? <span class="asterisk-policy">*</span><img class="icon-info2" src="{{ asset('assets/icons/Icon-Info2.svg') }}">
            </p>
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <x-fields.dropdown-field
                        name="Branch"
                        label="Select (1) Cocogen branch"
                        :options="['Pasig Branch' => 'Pasig Branch', 'Makati Branch', 'Quezon Branch']"
                        width="345px"
                        height="56px"
                        required />
                </div>
            </div>



            <p class="question">How do you want to be contacted? <span class="asterisk-policy">*</span>(You may select more than one)</p>
            <div class="row">
                <div class="col">
                    <x-buttons.checkbox-button
                        id="email"
                        label="Email"
                        checked="false" />
                    <x-buttons.checkbox-button
                        id="sms"
                        label="SMS"
                        checked="false" />

                </div>
                <div class="col">
                    <x-buttons.checkbox-button
                        id="messenger"
                        label="Messenger"
                        checked="false" />

                    <x-buttons.checkbox-button
                        id="call"
                        label="Call"
                        checked="false" />
                </div>
            </div>

            <div class="row" style="margin-top:35px; margin-bottom:35px;">
                <div class="col-md-6">
                    <x-Buttons.secondary-arrow-button id="cancel-btn-2">Cancel </x-Buttons.secondary-arrow-button>
                </div>

                <div class="col-md-6">
                    <x-Buttons.primary-arrow-button id="next-btn-2">Next </x-Buttons.primary-arrow-button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>