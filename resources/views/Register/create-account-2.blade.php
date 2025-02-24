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
            display: none;
            flex-direction: row;
        }

        .create-account-2 {
            display: flex;
        }
    </style>
</head>

<body>
    <div class="create-account-2" id="form-2">
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />
        <div class="account-form-2">
            <x-Register.form-title title="Getting to know you" />
            <div class="policy-checkbox">
                <div class="policy-checkboxes">
                    <div class="checkbox-col-1">
                        <div class="check-row-1">
                            <x-buttons.checkbox-button
                                id="Auto-Excel"
                                name="Auto-Excel"
                                label="Auto Excel Plus"
                                :checked=false />
                        </div>
                        <div class="check-row-1">
                            <x-buttons.checkbox-button
                                id="International-Travel"
                                name="International-Travel"
                                label="International Travel Plus"
                                :checked=false />
                        </div>
                        <div class="check-row-1">
                            <x-buttons.checkbox-button
                                id="Domestic-Travel"
                                name="Domestic-Travel"
                                label="Domestic Travel Plus"
                                :checked=false />
                        </div>
                    </div>
                    <div class="checkbox-col-2">
                        <div class="check-row-2">
                            <x-buttons.checkbox-button
                                id="furtech"
                                name="furtech"
                                label="Furtech"
                                :checked=false />
                        </div>
                        <div class="check-row-2">
                            <x-buttons.checkbox-button
                                id="bonds"
                                name="bonds"
                                label="Bonds"
                                :checked=false />
                        </div>
                        <div class="check-row-2">
                            <x-buttons.checkbox-button
                                id="hackguard"
                                name="hackguard"
                                label="Hackguard"
                                :checked=false />
                        </div>
                    </div>
                    <div class="checkbox-col-3">
                        <div class="check-row-3">
                            <x-buttons.checkbox-button
                                id="condo-excel"
                                name="condo-excel"
                                label="Condo Excel"
                                :checked=false />
                        </div>
                    </div>
                </div>

                <div class="representatives">
                    <p>Do you want to be contacted by a Cocogen Representative?<span>*</span></p>
                    <div class="pill-btns">
                        <x-Buttons.pill-button
                            id="existing-policy-pill"
                            :pillOneText="'No'"
                            :pillTwoText="'Yes'" />
                    </div>
                </div>

                <div class="cocogen-branch">
                    
                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>