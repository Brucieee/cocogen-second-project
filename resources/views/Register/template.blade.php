<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%; 
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: row; 
        }

        .stepper-container {
            width: 255px;
            height: 100vh;
            position: fixed; 
            top: 0;
            left: 0;
            background-color: #008080;
            padding: 35px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 50px;
            z-index: 1000;
        }

        .content-container {
            margin-top: 66px;
            margin-right: 130px;
            margin-bottom: 66px;
            margin-left: 370px; 
            flex-grow: 1; 
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