<head>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
    </style>


    <script>
        $(document).ready(function() {
            $("#step2").hide();
            $("#step3").hide();
            $("#step3").hide();



        });
        // $(document).ready(function () {
        //     // Initially hide all except the first form
        //     $('#form-2, #identity-form').hide();
        //     $("#step2, #step3").hide();

        //     // Move to Step 2
        //     $('#next-btn-1').click(function () {
        //         $("#form-1").hide();
        //         $("#form-2").show();
        //         $("#step1").hide();
        //         $("#step2").show();
        //     });

        //     // Move back to Step 1
        //     $("#cancel-btn-2").click(function () {
        //         $("#form-2").hide();
        //         $("#form-1").show();
        //         $("#step2").hide();
        //         $("#step1").show();
        //     });

        //     // Move to Step 3
        //     $("#next-btn-2").click(function (e) {
        //         e.preventDefault();
        //         $("#form-2").hide();
        //         $("#step2").hide();
        //         $("#identity-form").show();
        //         $("#step3").show();
        //     });

        //     // Move back to Step 2
        //     $("#cancel-btn-3").click(function (e) {
        //         e.preventDefault();
        //         $("#identity-form").hide();
        //         $("#step3").hide();
        //         $("#form-2").show();
        //         $("#step2").show();
        //     });
        // });
    </script>

</head>

<body>
    <div id="step1">
        <x-stepper :currentStep="session('currentStep', 1)" />

    </div>
    <div id="step2">
        <x-stepper :currentStep="session('currentStep', 2)" />

    </div>
    <div id="step3">
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