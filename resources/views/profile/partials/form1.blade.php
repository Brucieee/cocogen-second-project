<form id="form1">
    <x-Fields.text-field label="Full Name" id="nameField" type="text" placeholder="Enter your name..." required="true" width="300px" />
    <x-Fields.text-field label="Age" id="ageField" type="number" placeholder="Enter your age..." required="true" width="300px" />
    <x-Fields.text-field label="Email" id="emailField" type="email" placeholder="Enter your email..." required="true" width="300px" />
    <x-Fields.dropdown-field-2 id="bank" name="bank" label="Bank/E-Wallet" :options="['GCash', 'Maya', 'BDO']" placeholder="Bank/E-Wallet Name" width="330px" required />

    <!-- Next Button inside Form 1 -->
    <button type="button" id="nextButton">Next</button>
</form>

<script>
    $(document).ready(function() {
        // Initially, hide Form 2
        $('#form2').hide();

        // When Next button is clicked, show Form 2 and hide Form 1
        $('#nextButton').on('click', function() {
            $('#form1').fadeOut(); // Hide Form 1
            $('#form2').fadeIn();  // Show Form 2
        });

        // Store Form 1 data in sessionStorage when input fields change
        $('#form1 input, #form1 select').on('input', function() {
            let formData = {
                name: $('#nameField').val(),
                age: $('#ageField').val(),
                email: $('#emailField').val(),
                bank: $('#bank').val()
            };
            sessionStorage.setItem("form1Data", JSON.stringify(formData));
        });

        // Load stored data when the page loads
        if (sessionStorage.getItem("form1Data")) {
            let formData = JSON.parse(sessionStorage.getItem("form1Data"));
            $('#nameField').val(formData.name);
            $('#ageField').val(formData.age);
            $('#emailField').val(formData.email);
            $('#bank').val(formData.bank);
        }
    });
</script>
