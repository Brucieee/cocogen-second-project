<x-Fields.text-field 
    label="Full Name" 
    id="nameField" 
    type="text" 
    placeholder="Enter your name..." 
    required="true" 
    width="300px" 
/>

<x-Fields.text-field 
    label="Age" 
    id="ageField" 
    type="number" 
    placeholder="Enter your age..." 
    required="true" 
    width="300px" 
/>

<x-Fields.text-field 
    label="Email" 
    id="emailField" 
    type="email" 
    placeholder="Enter your email..." 
    required="true" 
    width="300px" 
/>

<x-Fields.dropdown-field-2
                            id="payment-type"
                            name="payment-type"
                            label="Payment Types"
                            :options="['Debit Card', 'Credit Card']"
                            placeholder="Payment Type"
                            width="330px"
                            required 
                            disabled />
                        <x-Fields.dropdown-field-2
                            id="bank"
                            name="bank"
                            label="Bank/E-Wallet"
                            :options="['GCash', 'Maya', 'BDO']"
                            placeholder="Bank/E-Wallet Name"
                            width="330px"
                            required />