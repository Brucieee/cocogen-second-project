@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div id="form1Container"> <!-- Wrap Form 1 in a container -->
        @include('profile.partials.form1')
    </div>

    <button id="nextButton">Next</button> <!-- Button to show Form 2 -->

    <div id="form2Container" style="display: none;"> <!-- Hide Form 2 initially -->

        @include('profile.partials.form2')

        <button id="previousButton">Previous</button> <!-- Button to go back to Form 1 -->
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide form2 by default
            $('#form2Container').hide();

            // When Next button is clicked, show form2 and hide form1
            $('#nextButton').on('click', function() {
                $('#form1Container').fadeOut(); // Hide Form 1 smoothly
                $('#form2Container').fadeIn(); // Show Form 2 smoothly
                $(this).hide(); // Hide Next button
            });

            // When Previous button is clicked, show form1 and hide form2
            $('#previousButton').on('click', function() {
                $('#form1Container').fadeIn(); // Show Form 1
                $('#form2Container').fadeOut(); // Hide Form 2
                $('#nextButton').show(); // Show Next button again
            });

            // ✅ Store form1 data in sessionStorage when typing
            $('#form1 input, #form1 select').on('input', function() {
                let formData = {
                    name: $('#nameField').val(),
                    age: $('#ageField').val(),
                    email: $('#emailField').val(),
                    bank: $('#bank').val()
                };
                sessionStorage.setItem("form1Data", JSON.stringify(formData));
            });

            // ✅ Load stored data when the page loads
            if (sessionStorage.getItem("form1Data")) {
                let formData = JSON.parse(sessionStorage.getItem("form1Data"));
                $('#nameField').val(formData.name);
                $('#ageField').val(formData.age);
                $('#emailField').val(formData.email);
                $('#bank').val(formData.bank);
            }

            // ✅ Submit both forms when Form 2 is submitted
            $('#form2').on('submit', function(e) {
                e.preventDefault();

                let form1Data = JSON.parse(sessionStorage.getItem("form1Data")) || {};
                let form2Data = {
                    address: $('#addressField').val(),
                    phone: $('#phoneField').val()
                };

                let combinedData = {
                    ...form1Data,
                    ...form2Data
                }; // Merge data

                $.ajax({
                    url: '/submit-test',
                    type: 'POST',
                    data: combinedData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content') // Include CSRF token here
                    },
                    success: function(response) {
                        alert('Form submitted successfully');
                        console.log(response);
                        sessionStorage.removeItem("form1Data"); // ✅ Clear storage after submit
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });

            });
        });
    </script>
