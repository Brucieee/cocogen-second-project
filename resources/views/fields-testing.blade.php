<x-Fields.text-field
    label="First Name"
    id="first_name"
    placeholder="Enter your first name"
    width="300px"
    required />

<x-Fields.dropdown-field-2
    label="Nationality"
    id="nationality-dropdown"
    placeholder="Select nationality"
    :required="true"
    :width="'300px'"
    :options="['Filipino', 'Japanese', 'Korean', 'Chinese', 'Indian', 'Thai']" />

<x-Fields.dropdown-field-2
    label="Test"
    id="test"
    placeholder="Select nationality"
    :required="false"
    :width="'300px'"
    :options="['Filipino', 'Japanese', 'Korean', 'Chinese', 'Indian', 'Thai']" />