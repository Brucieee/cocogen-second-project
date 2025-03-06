<html>
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            display: block;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            width: 100% !important;
            height: auto !important;
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>

    @include('register.create-account-as')

    @include('register.create-account-as-partner')

    @include('forms.form1-ph')
    
    @include('forms.form2-ph')
    
    @include('forms.form2-1-ph')

    @include('forms.form3-ph')

    @include('forms.form4-ph')
    
    @include('forms.form5-ph')

    @include('forms.form6-otp')


</body>

</html>
