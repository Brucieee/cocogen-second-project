{{-- resources/views/welcome.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocogen Insurance</title>
    <!-- You can include your stylesheets here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>

         /* Main Content with Background Image */
    .main-content {
        width: 100%; /* Full width */
        height: 686px; /* Set height */
        background-image: url("{{ asset('asset/main-picture.png') }}"); /* Background Image */
        background-size: cover; /* Cover the entire section */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Prevent repeating */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Centers content vertically */
        align-items: center; /* Centers content horizontally */
    }
        </style>
</head>

<body>
    <!-- Navigation Bar -->
    <x-nav-bar />

    <div class="main-content">
   
</div>

</body>

</html>
