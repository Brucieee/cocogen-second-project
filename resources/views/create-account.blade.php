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

        .container-create-account {
            width: 756px;
            /* Fixed width */
            height: 692px;
            /* Fixed height */
            margin-left: 125px;
            margin-right: 144px;
            padding: 25px;
            /* Padding around the content */
            display: flex;
            flex-direction: column;
            /* Keeps back button on top */
            gap: 25px;
            /* Space between elements */
            position: relative;
            box-sizing: border-box;
        }
    </style>


    <script>
        $(document).ready(function() {

            $('#form-2').hide();
            $("#step2").hide();
            $("#step3").hide();

            $('#next-btn-1').click(function() {
                $("#form-1").hide();
                $("#form-2").show();
            });

            $("#cancel-btn-2").click(function(e) {
                e.preventDefault();
                $("#form-2").hide();
                $("#form-1").show();

            })

            $("#next-btn-2").click(function(e) {
                e.preventDefault();
                $("#form-2").hide();
                $("#identity-form").show();
            })
            $("#cancel-btn-3").click(function(e) {
                e.preventDefault();
                $("#form-2").show();
                $("#identity-form").hide();
            })



        });
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
            @include('Register.create-account-1')
        </form>

    </div>
    <!-- Add Bootstrap JavaScript (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>