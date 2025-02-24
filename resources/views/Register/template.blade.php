<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row;
            box-sizing: border-box;
        }

        .content-container {
            width: 756px;
            /* Fixed width */
            height: 692px;
            /* Fixed height */
            margin-top: 60px;
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
        }


    </style>
</head>

<body>

    <div class="stepper-container">
        <x-stepper :currentStep="session('currentStep', 1)" />
    </div>

    <div class="content-container">
      

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>