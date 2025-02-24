<x-Fields.text-field label="First Name" id="first_name" placeholder="Enter your first name" width="300px" required />

<x-fields.dropdown-field-2
    label="Nationality" 
    id="nationality-dropdown" 
    placeholder="Select nationality" 
    :required="true" 
    :width="'336px'"
    :options="['Filipino', 'Japanese', 'Korean', 'Chinese', 'Indian', 'Thai']"
/>
