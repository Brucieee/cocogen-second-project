<html>
<meta name="csrf-token" content="{{ csrf_token() }}">

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
    <form action="{{ route('register.policyholder') }}" method="POST" id="addPolicyholder">
        @csrf
        <div id="dynamic-content">

        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            // submit event 

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                $('#nextStep').on('click', function(event) {
                    event.preventDefault();

                    var formData = {
                        firstName: $('#first_name').val(),
                        middleName: $('#middle_name').val(),
                        lastName: $('#last_name').val(),
                        dateOfBirth: $('#date_of_birth').val(),
                        placeOfBirth: $('#place_of_birth').val(),
                        sex: $('#sex').val(),
                        citizenship: $('#citizenship').val(),
                        contactNumber: $('#contactNumber').val(),
                        email: $('#email').val(),
                    };

                    $.ajax({
                        type: 'POST',
                        url: '/register-policyholder', // Update with your route
                        data: formData,
                        success: function(response) {
                            alert('Form submitted successfully');
                            window.location.href = response.redirect_url; // Redirect if needed
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            let errorMessages = Object.values(errors).flat().join("\n");
                            alert("Form submission failed:\n" + errorMessages);
                        }
                    });
                });
            });



            let selectedOption = null;

            $(document).ready(function() {

                loadPage('create-account-as');

                function loadPage(page) {
                    if (!page) {
                        console.error("Attempted to load undefined page");
                        return;
                    }

                    console.log(`Loading page: ${page}`);

                    $.ajax({
                        url: `/register/${page}`,
                        type: 'GET',
                        success: function(response) {
                            $('#dynamic-content').html(response);

                            restoreFormValues();
                        },
                        error: function(xhr, status, error) {
                            console.error(`Error loading page: ${page}`, error);
                        }
                    });
                }

                function saveFormValues() {
                    $('input, select, textarea').each(function() {
                        let fieldName = $(this).attr('id') || $(this).attr('name');
                        if (fieldName) {
                            if ($(this).is(':checkbox, :radio')) {
                                sessionStorage.setItem(fieldName, $(this).prop('checked'));
                            } else {
                                sessionStorage.setItem(fieldName, $(this).val());
                            }
                        }
                    });
                    console.log("Form values saved to sessionStorage.");
                }

                function restoreFormValues() {
                    $('input, select, textarea').each(function() {
                        let fieldName = $(this).attr('id') || $(this).attr('name');
                        if (fieldName && sessionStorage.getItem(fieldName) !== null) {
                            if ($(this).is(':checkbox, :radio')) {
                                $(this).prop('checked', sessionStorage.getItem(fieldName) ===
                                    "true");
                            } else {
                                $(this).val(sessionStorage.getItem(fieldName));
                            }
                        }
                    });
                    console.log("Form values restored from sessionStorage.");
                }

                $(document).on('click',
                    '#goToPolicyholder, #goToPartner, #goBack, #nextStep, #cancelAction',
                    function(
                        e) {
                        e.preventDefault();

                        saveFormValues();

                        let targetPage = $(this).data('target');
                        console.log(`Navigation button clicked: ${this.id}, target: ${targetPage}`);

                        if (targetPage) {
                            loadPage(targetPage);
                        } else {
                            console.error("No target page specified");
                        }
                    });

                $(document).on('click', '#goBack', function(e) {
                    e.preventDefault();
                    let targetPage = $(this).data('target');

                    if (targetPage && targetPage !== '#') {
                        loadPage(targetPage);
                    } else {
                        window.history.back();
                    }
                });

                $(document).on('click', '.pill-button', function() {
                    $('.pill-button').removeClass('expanded');
                    $(this).addClass('expanded');
                    selectedOption = $(this).attr('id');
                    console.log(`Pill selected: ${selectedOption}`);
                });


                $(document).on('click', '#nextStep', function(e) {
                    e.preventDefault();
                    saveFormValues();

                    let targetPage = $(this).data('target');
                    if (!targetPage) {
                        if (selectedOption === 'noOption') {
                            targetPage = 'create-account-as-ph-2';
                        } else if (selectedOption === 'yesOption') {
                            targetPage = 'create-account-as-ph-2-2';
                        } else {
                            console.error("No target page and no pill option selected");
                            return;
                        }
                    }

                    loadPage(targetPage);
                });





            });
        </script>
</body>

</html>