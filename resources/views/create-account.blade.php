<head>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

        /* .container-create-account {
            width: 756px;
            height: 692px;
            margin-left: 125px;
            margin-right: 144px;
            padding: 25px;

            display: flex;
            flex-direction: column;
            
            gap: 25px;
           
            position: relative;
            box-sizing: border-box;
        } */
        .stepper {
            position: absolute;
            width: auto;
            top: 0;
            left: 0;
            display: none;
            height: 100%;
            /* Hide all stepper elements by default */
        }

        #step1 {
            display: flex;
        }
    </style>


    <script>
        $(document).ready(function() {
            $("#step2").hide();
            $("#step3").hide();
            $("#step3").hide();



        });
        $(document).ready(function() {
    $("#step2").hide();
    $("#step3").hide();

    // Move to Step 2
    $('#next-btn-1').click(function () {
        $("#step1").hide();
        $("#step2").show();
    });

    // Move back to Step 1
    $("#cancel-btn-2").click(function () {
        $("#step2").hide();
        $("#step1").show();
    });

    // Move to Step 3
    $("#next-btn-2").click(function (e) {
        e.preventDefault();
        $("#step2").hide();
        $("#step3").show();
    });

    // Move back to Step 2
    $("#cancel-btn-3").click(function (e) {
        e.preventDefault();
        $("#step3").hide();
        $("#step2").show();
    });
});

    </script>

</head>

<body>
    <div id="step1" class="stepper">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>
    <div id="step2" class="stepper">
        <x-stepper :currentStep="session('currentStep', 2)" />
    </div>
    <div id="step3" class="stepper">
        <x-stepper :currentStep="session('currentStep', 3)" />
    </div>

    <div class="container-create-account">
        <form method="" action="">
            @include('Register.create-account-2')


        </form>




        @include('Register.account-registered')

    </div>


    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>