<form id="userForm">
    <!-- CSRF Token for security -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-Fields.text-field label="Full Name" id="nameField" type="text" placeholder="Enter your name..." required="true"
        width="300px" />
    <x-Fields.text-field label="Age" id="ageField" type="number" placeholder="Enter your age..." required="true"
        width="300px" />
    <x-Fields.text-field label="Email" id="emailField" type="email" placeholder="Enter your email..." required="true"
        width="300px" />
    <x-Fields.dropdown-field-2 id="bank" name="bank" label="Bank/E-Wallet" :options="['GCash', 'Maya', 'BDO']"
        placeholder="Bank/E-Wallet Name" width="330px" required />

    <button type="submit">Submit</button>
</form>

<script>
    $(document).ready(function() {
        $('#userForm').on('submit', function(e) {
            e.preventDefault(); // Prevent form from submitting the traditional way

            // Get the CSRF token from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Gather form data
            var formData = {
                name: $('#nameField').val(),
                age: $('#ageField').val(),
                email: $('#emailField').val(),
                bank: $('#bank').val(),
            };

            // Send data to backend using AJAX
            $.ajax({
                url: '/submit-test', // Updated route to /submit-test
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Add CSRF token to the request headers
                },
                success: function(response) {
                    alert('Form submitted successfully');
                    console.log(response); // Handle response
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                }
            });
        });
    });
</script>
