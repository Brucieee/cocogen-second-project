<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        html,
        body {
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
    <div id="dynamic-content">
        <!-- Dynamic content will be loaded here -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Variable to store selected option - add this outside the document.ready function
        let selectedOption = null;

        $(document).ready(function() {
            // Load the initial page
            loadPage('create-account-as');

            // Function to load pages dynamically
            function loadPage(page) {
                // Add error checking
                if (!page) {
                    console.error("Attempted to load undefined page");
                    return;
                }

                console.log(`Loading page: ${page}`); // Add logging

                $.ajax({
                    url: `/register/${page}`,
                    type: 'GET',
                    success: function(response) {
                        $('#dynamic-content').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(`Error loading page: ${page}`, error);
                    }
                });
            }

            // Event delegation for standard navigation buttons
            $(document).on('click', '#goToPolicyholder, #goToPartner, #goBack', function(e) {
                e.preventDefault();
                let targetPage = $(this).data('target');
                console.log(`Navigation button clicked: ${this.id}, target: ${targetPage}`);
                loadPage(targetPage);
            });

            $(document).on('click', '#goBack', function(e) {
                e.preventDefault();
                let targetPage = $(this).data('target');

                if (targetPage && targetPage !== '#') {
                    loadPage(targetPage);
                } else {
                    window.history.back(); // Go back without reloading
                }
            });

            // Handle pill button selection
            $(document).on('click', '.pill-button', function() {
                $('.pill-button').removeClass('expanded');
                $(this).addClass('expanded');
                selectedOption = $(this).attr('id');
                console.log(`Pill selected: ${selectedOption}`);
            });

            // Handle next step based on selected option
            $(document).on('click', '#nextStep', function(e) {
                e.preventDefault();
                console.log(`Next step clicked, selected option: ${selectedOption}`);

                // First check if the button has a data-target
                let targetPage = $(this).data('target');

                // If no data-target, use the selected pill option to determine the page
                if (!targetPage) {
                    if (selectedOption === 'noOption') {
                        targetPage = 'create-account-as-ph-2';
                    } else if (selectedOption === 'yesOption') {
                        targetPage = 'create-account-as-ph-2-2';
                    } else {
                        console.error("No target page and no pill option selected");
                        return; // Exit if we can't determine where to go
                    }
                }

                loadPage(targetPage);
            });
        });
    </script>
</body>

</html>
