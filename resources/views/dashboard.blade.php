<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="bg-light text-dark">
    <div class="container-fluid">
        <div class="row">
            <!-- Stepper Component (Sticky on Left) -->
            <div class="col-auto d-flex align-items-start p-4">
                <x-stepper :currentStep="session('currentStep', 2)" class="position-sticky top-0" style="width: 255px; height: 831.5px;" />
            </div>

            <!-- Content Section (Expands to Right) -->
            <div class="col ms-auto p-4">
                <x-create-account-selection
                    image="/assets/images/Image-Policyholder.png"
                    title="Policyholder"
                    description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                    buttonText="Create account as Policyholder" />
            </div>
        </div>
    </div>
<x-createaccount.back-button title="Your Page Title" />

    <!-- Bootstrap JS (Optional, needed for some Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
