<form id="form3" style="display: none;">
    <x-Fields.text-field label="Additional Info" id="additionalInfo" type="text" placeholder="Enter more details..."
        required="true" width="300px" />

    <x-buttons.checkbox id="agree_terms" name="agree_terms" label="I agree to the terms and conditions" value="1" required
        />

        <button type="button" id="previousToForm2">Previous</button>
        <button type="submit" id="submitFinal">Submit Final Data</button>
</form>

<script>
    $(document).ready(function() {
        // Submit Form 3
        $('#form3').on('submit', function(e) {
            e.preventDefault();

            // Collect form data
            let form3Data = {
                additionalInfo: $('#additionalInfo').val(), // Get the additional info
                agree_terms: $('#agree_terms').is(':checked') ? 1 : 0 
            };

            // Get the stored ID
            let id = sessionStorage.getItem("submittedID");

            if (!id) {
                alert('Error: No ID found. Please start over.');
                return;
            }

            // Submit data via AJAX
            $.ajax({
                url: `/submit-extra-data/${id}`, // Include the ID in the URL
                type: 'POST',
                data: form3Data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Form 3 submitted successfully:', response); // Debugging
                    alert('Additional info saved successfully!');
                    sessionStorage.removeItem("submittedID"); // Clear the stored ID
                    $('#form3').fadeOut(function() {
                        $('#form1').fadeIn(); // Optionally, go back to Form 1
                    });
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                    console.error(xhr.responseText); // Log the error response
                }
            });
        });
    });
</script>
