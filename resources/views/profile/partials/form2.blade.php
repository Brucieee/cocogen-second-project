<form id="form2">
    <x-Fields.text-field label="Address" id="addressField" type="text" placeholder="Enter your address..." required="true" width="300px" />
    <x-Fields.text-field label="Phone" id="phoneField" type="text" placeholder="Enter your phone number..." required="true" width="300px" />

    <!-- Previous and Submit Buttons inside Form 2 -->
    <button type="button" id="previousButton">Previous</button>
    <button type="submit" id="submitAll">Submit All Data</button>
</form>

<script>
    $(document).ready(function() {
        // When Previous button is clicked, show Form 1 and hide Form 2
        $('#previousButton').on('click', function() {
            $('#form2').fadeOut(); // Hide Form 2
            $('#form1').fadeIn();  // Show Form 1
        });

        // Submit both forms when Form 2 is submitted
        $('#form2').on('submit', function(e) {
            e.preventDefault();

            let form1Data = JSON.parse(sessionStorage.getItem("form1Data")) || {};
            let form2Data = {
                address: $('#addressField').val(),
                phone: $('#phoneField').val()
            };

            let combinedData = { ...form1Data, ...form2Data }; // Merge data

            $.ajax({
                url: '/submit-test', // Adjust to your backend route
                type: 'POST',
                data: combinedData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token here
                },
                success: function(response) {
                    alert('Form submitted successfully');
                    console.log(response);
                    sessionStorage.removeItem("form1Data"); // Clear storage after submit
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                    console.error(xhr.responseText); // Log the error response
                }
            });
        });
    });
</script>
