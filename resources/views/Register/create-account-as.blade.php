<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    html,
    body {
        width: auto !important;
        height: auto !important;
        min-width: 0 !important;
        min-height: 0 !important;
        font-family: 'Inter', sans-serif;
    }

    .page-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .main-wrapper {
        flex-grow: 1;
        display: flex;
        justify-content: center;
        gap: 25px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        margin-top: auto;
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
        margin-bottom: 25px;
    }
</style>
</style>


<body>
    <div class="stepper-container-1">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="main-wrapper">
        <div class="content-container">
            <div class="back-button-row">
                <x-Register.back-button id="button_back_1" title="Create account" backUrl="#" />
            </div>

            <div class="select-account-row">
                <div class="select-account-component">
                    <x-Register.select-account :image="'images/Image-Policyholder.png'" :title="'Policyholder'" :description="'Sign up as Policyholder. Avail of Cocogen products, access policies conveniently, and file claims easily.'" :buttonText="'Create account as Policyholder'"
                        :id="'button_policyholder'" />
                </div>

                <div class="select-account-component">
                    <x-Register.select-account :image="'images/Image-Partner.png'" :title="'Partner'" :description="'Sign up as Partner. Be a Cocogen agent to earn additional income, and get perks for being a partner of Cocogen.'" :buttonText="'Create account as Agent'"
                        :id="'button_partner'" />
                </div>
            </div>
        </div>

        <div id="dynamic-content"></div>
    </div>

</body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#button_partner").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/create-account-as-partner',
                type: 'GET',
                success: function(response) {
                    // Replace content properly
                    $("#dynamic-content").html(response).show();

                    // Hide unnecessary elements
                    $(".content-container, .stepper-container-1").hide();
                },
                error: function(xhr) {
                    console.error("Error loading page:", xhr.status, xhr.statusText);
                }
            });
        });
    });

    $(document).ready(function() {
        $("#button_policyholder").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/create-account-as-ph-1',
                type: 'GET',
                success: function(response) {
                    // Replace content properly
                    $("#dynamic-content").html(response).show();

                    // Hide unnecessary elements
                    $(".content-container").hide();
                },
                error: function(xhr) {
                    console.error("Error loading page:", xhr.status, xhr.statusText);
                }
            });
        });
    });
</script>
