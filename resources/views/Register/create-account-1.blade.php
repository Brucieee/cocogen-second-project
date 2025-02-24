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
        }

        .account-container-1 {
            width: 784px;
            height: 542px auto;
            top: 96px;
            left: 349px;
            padding: 35px;
            gap: 55px;
            margin-left: 300px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>




    <div class="account-container-1" id="account-form-1">
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />
        <div class="account-form">
            <x-Register.form-title title="Getting to know you" />
            <div class="account-form-contents">
                <div class="form-row-1">
                <x-fields.text-field
                        id="first-name"
                        name="first-name"
                        label="First Name"
                        placeholder="First Name"
                        width="212px"
                        required />
                <x-fields.text-field
                        id="middle-name"
                        name="middle-name"
                        label="Middle Name"
                        placeholder="Middle Name"
                        width="212px"
                        required />
                <x-fields.text-field
                        id="last-name"
                        name="last-name"
                        label="Last Name"
                        placeholder="Last Name"
                        width="212px"
                        required />
                </div>
                <div class="form-row-2">
                <x-fields.text-field
                        type="Date"
                        id="date-birth"
                        name="date-birth"
                        label="Date of Birth"
                        placeholder="Date of Birth"
                        width="330px"
                        required />
                <x-fields.text-field
                        id="place-birth"
                        name="-place-birth"
                        label="Place of Birth"
                        placeholder="Place of Birth"
                        width="330px"
                        required />
                </div>
                <div class="form-row-3">
                    
                </div>
                <div class="form-row-4">
                    
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>