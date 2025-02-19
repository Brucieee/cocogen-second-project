<head>
    <!-- Add Google Fonts link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body class="font-sans">
    <div class="p-6 text-gray-900">
        <!-- Flex container for Stepper and Account Selection -->
        <div class="flex flex-row gap-6">
            <!-- Stepper -->
            <x-stepper :currentStep="session('currentStep', 3)" class="w-1/3" />

            <!-- Account Selection Component -->
            <x-create-account-selection
                image="/assets/images/Image-Policyholder.png"
                title="Policyholder"
                description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily.  "
                buttonText="Create account as Policyholder"
                class="w-2/3"
            />
        </div>
    </div>
</body>
