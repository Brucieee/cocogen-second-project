<head>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        .create-form {
            display: flex;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>


    <div class="main-container" id="step-content">
        <form action="" class="create-form">
            @include('Register.create-account-1')
        </form>
    </div>


</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#next-btn').click(function() {
            var nextStep = $(this).data('next'); // Get the next step from the button

            $.ajax({
                url: "{{ route('load.step') }}",
                type: "GET",
                data: {
                    step: nextStep
                },
                success: function(response) {
                    $('#step-content').html(response);

                    // Update button with the next step (you can set this dynamically in each step)
                    $('#next-btn').data('next', 'your-identity-1'); // Example: set next step dynamically
                },
                error: function() {
                    alert("Something went wrong!");
                }
            });
        });
    });
</script>