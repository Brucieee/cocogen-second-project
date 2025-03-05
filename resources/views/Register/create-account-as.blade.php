<style>


    /* Content wrapper must push content to center */
    .content-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-grow: 1; /* Take up remaining space */
    }


    .content-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
        padding: 30px;
        border-radius: 10px;
        max-width: 700px;
    }

    .select-account-container {
        display: flex;
        gap: 22px;
    }

    .select-account-component img {
        width: 100%;
    }

    .main {
        margin: 0;
        padding: 0;
        width: 100%;
    }
</style>

<body>

    <div id="accountAs" class="content-wrapper">

        <x-stepper :currentStep="session('currentStep', 1)" />

        
            <div class="content-container">
                <div class="back-button-row">
                    <x-back-title id="goBack" title="Create account" backUrl="#" />
                </div>

                <div class="select-account-container">
                    <x-Register.select-account image="images/Image-Policyholder.png" title="Policyholder"
                        description="Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily."
                        buttonText="Create account as Policyholder" id="goToPolicyholder" />
                    <div class="select-account-component">
                        <x-Register.select-account :image="'images/Image-Partner.png'" :title="'Partner'" :description="'Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen.'"
                            :buttonText="'Create account as Agent'" id="goToPartner" />
                    </div>
                </div>
            </div>
        </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        $('#form1').hide();
        $('#form2').hide();
        $('#form2-1').hide();

        $('#asPartner').hide();

        $('#goToPolicyholder').on('click', function() {
            $('#accountAs').hide();
            $('#form1').show();
        });

        $('#goToPartner').on('click', function() {
            $('#accountAs').hide();
            $('#asPartner').show();
        });


    })
</script>
