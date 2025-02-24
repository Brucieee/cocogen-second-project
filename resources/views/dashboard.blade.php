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
            box-sizing: border-box;
        }

        .content-container {
            width: 756px;
            /* Fixed width */
            height: 692px;
            /* Fixed height */
            margin-top: 60px;
            margin-left: 125px;
            margin-right: 144px;
            padding: 25px;
            /* Padding around the content */
            display: flex;
            flex-direction: column;
            /* Keeps back button on top */
            gap: 25px;
            /* Space between elements */
            position: relative;
        }
        .create-account-2 {
            display: flex;
            flex-direction: column;
            width: 780px auto;
            height: 975px auto;
            padding: 35px;
            gap: 25px;
            margin-left: 115px;
            margin-top: 66px;
            margin-left: 370px;
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
            flex-wrap: wrap; /* Allow wrapping */
        }
        .checkbox-col-1 .checkbox-row {
            display: flex;
            gap: 10px;
            width: 48%; /* Ensure they take up 2 columns */
        }

        .check-row-1,
        .check-row-2 {
            display: flex;
            gap: 10px;
            justify-content: space-between;
            flex-direction: column;
        }

        .contact-representative {
            display: flex;
            gap: 25px;
            flex-direction: column;
        }

        .contact-representative,
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
        
    </style>
</head>

<body>

    <div class="stepper-container">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="content-container">
    @include('fields-testing') 
    @include('Register.create-account-2')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

