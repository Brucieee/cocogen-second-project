<style>
    html,
    body {
        width: 100%;
        height: 100vh;
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
    }

    /* Main container for layout */
    .main-container {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    /* Content wrapper must push content to center */
    .content-wrapper {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 0;
    }

    .content-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
        padding: 30px;
        border-radius: 10px;
        max-width: 700px;
        margin-left: 400px;
    }

    .select-account-container {
        display: flex;
        gap: 22px;
    }

    .select-account-component img {
        width: 100%;
    }
</style>

<body>
    <div class="main-container">
        <!-- Stepper stays on the leftmost side -->
        <x-stepper :currentStep="session('currentStep', 1)" />

        <!-- Content stays centered on screen -->
        <div class="content-wrapper">
            <div class="content-container">
                <div class="back-button-row">
                    <x-Register.back-button id="goBack" title="Create account" backUrl="#" />
                </div>

                <div class="select-account-container">
                    <div class="select-account-component">
                        <x-Register.select-account 
                            :image="'images/Image-Policyholder.png'" 
                            :title="'Policyholder'" 
                            :description="'Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily.'"
                            :buttonText="'Create account as Policyholder'" 
                            id="goToPolicyholder"
                            :dataTarget="'create-account-as-ph-1'" />
                    </div>
                    <div class="select-account-component">
                        <x-Register.select-account 
                            :image="'images/Image-Partner.png'" 
                            :title="'Partner'" 
                            :description="'Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen.'"
                            :buttonText="'Create account as Agent'" 
                            id="goToPartner"
                            :dataTarget="'create-account-as-partner'" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
