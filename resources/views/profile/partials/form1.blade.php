<form id="form1">
    <x-Fields.text-field label="Full Name" id="nameField" type="text" placeholder="Enter your name..." required="true" width="300px" />
    <x-Fields.text-field label="Age" id="ageField" type="number" placeholder="Enter your age..." required="true" width="300px" />
    <x-Fields.text-field label="Email" id="emailField" type="email" placeholder="Enter your email..." required="true" width="300px" />
    <x-Fields.dropdown-field-2 id="bank" name="bank" label="Bank/E-Wallet" :options="['GCash', 'Maya', 'BDO']" placeholder="Bank/E-Wallet Name" width="330px" required />
</form>
