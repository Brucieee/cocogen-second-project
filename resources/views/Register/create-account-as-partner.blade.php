<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>

<body>

    <div class="main-container">
        <x-Register.back-button title="Create account as Policyholder" backUrl="{{ url()->previous() }}" />
</body>
</head>