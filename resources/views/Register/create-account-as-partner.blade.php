<style>
    html,
    body {
        width: 100%;
        height: 100%;
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-container {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        width: 197px;
        height: 54px;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
        padding: 10px;
        margin-left: 25px;
        margin-top: 28px;
    }

    .logo-container img {
        width: 197px;
        height: 54px;
    }

    .container {
        display: flex;
        width: 862px;
        flex-direction: column;
        gap: 21px;
        margin: 0;
    }

    .contents {
        display: flex;
        padding: 35px;
        flex-direction: row;
        align-items: center;
        gap: 25px;
        align-self: stretch;
        border-radius: 8px;
        background: var(--Surfaces-LVL-0, #F7FCFF);
    }

    .left-image {
        display: flex;
        align-items: flex-start;
    }

    .right-content {
        display: flex;
        width: 406px;
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    .title {
        align-self: stretch;
        color: var(--Primary-Black, #2D2727);
        font-family: Inter, sans-serif;
        font-size: 23px;
        font-weight: 700;
        line-height: normal;
    }

    .description {
        align-self: stretch;
        color: var(--Primary-Black, #2D2727);
        font-family: Inter, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 24px;
    }

    .buttons-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }

    .buttons-container a {
        text-decoration: none;
    }

    .back-button-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 0;
    }

    .back-button-container .back-button-title {
        pointer-events: none;
        /* Disable clicks on the title */
        cursor: default;
        /* Ensure the cursor doesn't change to a pointer */
    }

    .back-button-container button {
        pointer-events: auto;
        /* Ensure the button is clickable */
    }

    button#button_back_partner {
        padding: 0;
        margin: 0;
        display: inline-flex;
        align-items: center;
        border: none;
        background: none;
    }

    .left-image img {
        width: 100%;
    }
</style>

<body>
    <div class="m-container" id="asPartner">
        <div class="logo-container">
            <img src="{{ asset('assets/images/cocogen-logo.svg') }}" alt="Cocogen Logo">
        </div>

        <div class="container">
            <div class="back-button-container">

                <x-back-title 
                    title="Create account as Partner" 
                    id="backToAccountAsFromPartner"
                />
            </div>

            <div class="contents">
                <div class="left-image">
                    <img src="{{ asset('assets/images/Image-Partner.png') }}" alt="Partner Image">
                </div>

                <div class="right-content">
                    <div class="title">Cocogen Partner Benefits</div>
                    <div class="description">
                        Becoming a Cocogen partner means working with a company that puts your career development before
                        anything else. We want you to have as much freedom and control as you want while making sure
                        that we
                        give you the proper support to help you maximize your profits. Working with us means you'll make
                        money and develop your skills and knowledge as an insurance agent.
                    </div>

                    <div class="buttons-container">
                        <a href="https://www.cocogen.com/be-a-partner">
                            <x-buttons.primary-button id="button_signup">Signup as Partner</x-buttons.primary-button>
                        </a>

                        <a href="https://www.cocogen.com/client-services">
                            <x-buttons.secondary-button id="button_email">Email Cocogen</x-buttons.secondary-button>
                        </a>

                        <a href="https://www.cocogen.com/locate-a-branch">
                            <x-buttons.secondary-button id="button_branch">Locate a branch</x-buttons.secondary-button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

        $(document).ready(function() {

            $('#backToAccountAsFromPartner').on('click', function() {
                console.log('Go back button clicked!');

                // Debugging: Check if the elements exist
                console.log('asPartner exists:', $('#asPartner').length);
                console.log('accountAs exists:', $('#accountAs').length);

                $('#asPartner').hide(); // Hide the Partner page
                $('#accountAs').show(); // Show the Account Selection page
            });
        });

</script>
