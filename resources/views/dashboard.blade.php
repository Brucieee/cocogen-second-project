<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-light text-dark" style="overflow: hidden;">

    <div class="container-fluid">
        <div class="row">
            <!-- Stepper Component (Sticky on Left) -->
            <div class="col-auto d-flex align-items-start p-4">
                <x-stepper :currentStep="session('currentStep', 2)" class="position-sticky top-0" style="width: 255px; height: 831.5px;" />
            </div>

            <!-- Main Content Section (Right Side) -->
            <div class="col" style="margin-top: 94px; margin-left: 380px; margin-bottom: 44px; margin-right: 144px;">
                <!-- Main Container with specified size, padding, and gap -->
                <div class="main-container" style="width: 756px; height: 692px; padding: 35px; display: flex; flex-direction: column; gap: 25px; overflow: hidden;">

                    <!-- Back Button Component -->
                    <x-createaccount.back-button title="Create account" backUrl="{{ url()->previous() }}" />


                    <!-- Create Account Selection Components (2 on bottom with gap of 25px) -->
                    <div class="d-flex justify-content-between gap-25px">
                        <x-create-account-selection
                            image="/assets/images/Image-Policyholder.png"
                            title="Policyholder"
                            description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                            buttonText="Create account as Policyholder" />

                        <x-create-account-selection
                            image="/assets/images/Image-Policyholder.png"
                            title="Policyholder"
                            description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                            buttonText="Create account as Policyholder" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, needed for some Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
