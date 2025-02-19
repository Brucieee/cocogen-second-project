<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light text-dark" style="overflow: hidden;">

    <div class="container-fluid">
        <div class="row">
            <!-- Stepper Component (Sticky on Left) -->
            <div class="col-auto d-flex align-items-start p-4">
                <x-stepper :currentStep="session('currentStep', 1)" class="position-sticky top-0" style="width: 255px; height: 831.5px;" />
            </div>

            <!-- Main Content Section (Right Side) -->
            <div class="col" style="margin-top: 54px; margin-left: 360px; margin-right: 144px;">
                <div class="main-container" style="width: 756px; height: 692px; padding: 35px; display: flex; flex-direction: column; gap: 25px; overflow: hidden;">


                <x-reminder.reminder-update-profile />
                <x-buttons.pill-button 
                :pillOneText="'No'" 
                :pillTwoText="'Yes'" />



                    <!-- Back Button Component -->
                    <x-createaccount.back-button title="Create account" backUrl="{{ url()->previous() }}" />

                    <!-- Create Account Selection Components -->
                    <div id="account-selection" class="d-flex justify-content-center align-items-center gap-4" style="flex-grow: 1;">
                        <x-create-account-selection
                            id="policyholder-selection"
                            image="/assets/images/Image-Policyholder.png"
                            title="Policyholder"
                            description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                            buttonText="Create account as Policyholder" />

                        <x-create-account-selection
                            id="partner-selection"
                            image="/assets/images/Image-Partner.png"
                            title="Partner"
                            description="Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen."
                            buttonText="Create account as Agent" />
                    </div>

                    <!-- Policyholder Form (Initially Hidden) -->
                    <div id="policyholder-form" class="form-container" style="display: none;">
                        <h4>Policyholder Form</h4>
                        <form>
                            <input type="text" placeholder="Policyholder Name" class="form-control mb-3">
                            <input type="email" placeholder="Policyholder Email" class="form-control mb-3">
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>

                    <!-- Partner Form (Initially Hidden) -->
                    <div id="partner-form" class="form-container" style="display: none;">
                        <h4>Partner Form</h4>
                        <form>
                            <input type="text" placeholder="Partner Name" class="form-control mb-3">
                            <input type="email" placeholder="Partner Email" class="form-control mb-3">
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, needed for some Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Ensure jQuery is loaded once, below is the script part -->
    <script>
        $(document).ready(function() {
            console.log('jQuery is ready'); // Check if jQuery is ready

            // Handle the Policyholder button click
            $(document).on('click', '#policyholder-button', function() {
                console.log('Policyholder button clicked');
                // You can add form toggle logic here if needed
            });

            // Handle the Partner button click
            $(document).on('click', '#partner-selection .secondary-button', function() {
                console.log('Partner button clicked');
                $('#account-selection').hide(); // Hide the account selection
                $('#partner-form').show(); // Show the Partner form
            });

            // Handle the Policyholder selection button click
            $(document).on('click', '#policyholder-selection .secondary-button', function() {
                console.log('Policyholder button clicked');
                $('#account-selection').hide(); // Hide the account selection
                $('#policyholder-form').show(); // Show the Policyholder form
            });
        });
    </script>


</body>