<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    html, body {
        width: 100%;
        height: 100%;
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
    }

    .main-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: fixed;
        width: 100%;
        height: 100%;
    }

    .content-container {
        display: flex;
        flex-direction: column;
        gap: 25px; /* 25px gap between back button and select account container */
        align-items: flex-start;
        margin: 35px;
    }

    .select-account-container {
        display: flex;
        gap: 22px; /* 22px gap between select account components */
        justify-content: center;
    }

    .select-account-component img {
        width: 100%;
    }

    #dynamic-content {
        width: 100%;
    }
</style>

<body>
    <div class="stepper-container-1">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="main-container">
        <!-- Content Container (Holds Back Button + Select Account) -->
        <div class="content-container">
            <!-- Back Button -->
            <div class="back-button-row">
                <x-Register.back-button id="button_back_1" title="Create account" backUrl="#" />
            </div>

            <!-- Select Account Container -->
            <div class="select-account-container">
                <div class="select-account-component">
                    <x-Register.select-account 
                        :image="'images/Image-Policyholder.png'" 
                        :title="'Policyholder'" 
                        :description="'Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily.'" 
                        :buttonText="'Create account as Policyholder'"
                        :id="'button_policyholder'" 
                    />
                </div>

                <div class="select-account-component">
                    <x-Register.select-account 
                        :image="'images/Image-Partner.png'" 
                        :title="'Partner'" 
                        :description="'Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen.'" 
                        :buttonText="'Create account as Agent'"
                        :id="'button_partner'" 
                    />
                </div>
            </div>
        </div>

        <div id="dynamic-content"></div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

</script>
