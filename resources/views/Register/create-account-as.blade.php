<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            margin: 0px;
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
            height: 600px;
            margin-top: 55px;
            margin-left: 225px;
            margin-right: 144px;
            margin-bottom: 44px;
            padding: 25px;
            padding-bottom: 0px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            position: relative;
        }

        .select-account-row {
            display: flex;
            justify-content: space-between;
        }

        .select-account-component {
            width: 45%;
        }

        .select-account-component img {
            width: 100%;
        }

        .back-button-row {
            width: 100%;
            top: 0;
            left: 0;
        }
    </style>
</head>

<body>


    <div class="content-container">

        <div class="back-button-row">
            <x-Register.back-button title="Go Back" backUrl="{{ route('dashboard') }}" />
        </div>

        <!-- Row for Select Account Components -->
        <div class="select-account-row">
            <div class="select-account-component">
                <x-Register.select-account
                    :image="'images/Image-Policyholder.png'"
                    :title="'Policyholder'"
                    :description="'Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily.'"
                    :buttonText="'Create account as Policyholder'"
                    :id="'policyholder-btn'" />
            </div>

            <div class="select-account-component">
                <x-Register.select-account
                    :image="'images/Image-Partner.png'"
                    :title="'Partner'"
                    :description="'Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen.'"
                    :buttonText="'Create account as Agent'"
                    :id="'partner-btn'" />
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>