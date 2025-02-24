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
            margin-top: 35px;
            margin-left: 125px;
            margin-right: 144px;
            margin-bottom: 0px;
            padding: 25px;
            padding-bottom: 0px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            position: relative;
        }

        .container-1 {
            display: flex;
            width: 784px;
            padding: 35px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
            border-radius: 8px;
            background: var(--Surfaces-LVL-0, #F7FCFF);
        }

        .title {
            color: var(--Primary-Black, #2D2727);
            font-family: Inter;
            font-size: 27px;
            font-weight: 700;
        }

        .container-2 {
            display: flex;
            width: 706px;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
        }

        .container-3 {
            display: flex;
            width: 714px;
            flex-direction: column;
            align-items: flex-start;
            gap: 35px;
        }

        .identification-title {
            display: flex;
            gap: 8px;
        }

        .identification-text {
            color: var(--Primary-Black-Text, #303030);
            font-family: Inter;
            font-size: 16px;
            font-weight: 500;
        }

        .optional-text {
            color: var(--Primary-Caption-Black-text, #585858);
            font-family: Inter;
            font-size: 16px;
            font-weight: 500;
        }

        .container-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 10px;
            align-self: stretch;
        }

        .container-5 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            align-self: stretch;
        }

        .upload-dp-title {
            color: var(--Teal-LVL-12, #033);
            font-family: Inter;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
        }

        .container-6 {
            display: flex;
            width: 706px;
            flex-direction: column;
            align-items: flex-start;
            gap: 25px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 25px;
        }
    </style>
</head>

<body>


    <div class="content-container">
        <div class="container-1">
            <h1 class="title">Create Account as Policyholder</h1>

            <div class="container-2">
                <x-Register.form-title
                    title="Your identity" />

                <div class="container-3">
                    <div class="identification-title">
                        <span class="identification-text">Identification</span>
                        <span class="optional-text">(Optional)</span>
                    </div>

                    <div class="container-4">
                        <x-Buttons.upload-button>
                            Upload ID
                        </x-Buttons.upload-button>

                        <x-Reminders.file-format />
                    </div>

                    <div class="container-5">
                        <span class="upload-dp-title">Upload Display Picture (Optional)</span>
                        <x-Buttons.upload-button>
                            Upload
                        </x-Buttons.upload-button>
                        <x-Reminders.file-format />
                    </div>
                </div>
                <div class="container-6">
                    <div class="button-group">
                        <x-Buttons.secondary-button>Continue later</x-Buttons.secondary-button>
                        <x-Buttons.primary-button>Next</x-Buttons.primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>