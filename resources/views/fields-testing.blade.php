<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Main Page</h1> <!-- Add a test heading -->

    <!-- Include Form 1 (Initially Visible) -->
    @include('profile.partials.form1')

    <!-- Include Form 2 (Initially Hidden) -->
    @include('profile.partials.form2')
</body>
</html>
