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

        /* Row container for select-account components */
        .select-account-row {
            display: flex;
            justify-content:space-between;
        }

        .select-account-component {
            width: 45%;
            /* Each component takes up 45% of the width */
        }

        /* Ensure content inside components is responsive */
        .select-account-component img {
            width: 100%;
            /* Ensures images are responsive */
        }

        /* Positioning for the back button to stay on top */
        .back-button-row {
            width: 100%;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>


    <x-stepper :currentStep="session('currentStep', 1)" />


    <div class="content-container">

        <div class="back-button-row">
            <x-Register.back-button title="Go Back" backUrl="{{ route('dashboard') }}" />
        </div>

        <!-- Row for Select Account Components -->
        <div class="select-account-row">
            <div class="select-account-component">
                <x-Register.select-account
                    :image="'images/Image-Partner.png'"
                    :title="'title'"
                    :description="'description'"
                    :buttonText="'buttonText'"
                    :id="'id'" />
            </div>

            <div class="select-account-component">
                <x-Register.select-account
                    :image="'images/Image-Partner.png'"
                    :title="'title'"
                    :description="'description'"
                    :buttonText="'buttonText'"
                    :id="'id'" />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>