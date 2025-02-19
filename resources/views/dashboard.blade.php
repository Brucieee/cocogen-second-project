<div class="p-6 text-gray-900">
    <!-- Stepper -->
    <x-stepper :currentStep="session('currentStep', 3)" />
    <x-create-account-selection
    image="path/to/image.jpg"
    title="Card Title"
    description="This is the card description."
    buttonText="Click Me" 
/>


</div>
