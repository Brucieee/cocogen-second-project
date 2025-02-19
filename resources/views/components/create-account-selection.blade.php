<!-- Unified Styles -->
<style>
    .card-container {
        width: 332px !important;
        height: 564px !important;
        min-width: 332px;
        max-width: 332px;
        min-height: 564px;
        max-height: 564px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        padding: 20px;
        border-radius: 5px;
        border: 1px solid #C0E6E6; /* Initial border color */
        background: #F7FCFF;
        font-family: 'Inter', sans-serif;
        box-sizing: border-box;
        overflow: hidden;
        transition: background-color 0.3s ease, border-color 0.3s ease; /* Added border-color transition */
    }

    .card-container:hover {
        background-color: #F0FAFF;
        border-color: #008080; /* Border color when hovered */
    }

    .card-image {
        width: 292px !important;
        height: 300px !important;
        border-radius: 5px;
        background: lightgray 50% / cover no-repeat;
        object-fit: cover;
        flex-shrink: 0;
        display: block;
    }

    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%; 
        flex-grow: 1;
    }

    .card-title {
        color: #2D2727;
        font-size: 23px;
        font-weight: 700;
        line-height: normal;
        margin: 10px 0;
    }

    .card-description {
        color: #585858;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        font-weight: 500;
        line-height: 24px;
        margin: 10px 0;
        text-align: justify;
        transition: color 0.3s ease;
    }

    .card-button-container {
        width: 100%;
        margin-top: auto;
    }

    /* Default Style for Secondary Button */
    .secondary-button {
        background-color: #C0E6E6;
        border-color: #008080;
        color: #008080;
        width: 100%;
        padding: 10px 20px;
        border-radius: 5px;
        border: 1px solid;
        cursor: pointer;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
    }

    /* Hover Effect for Switching to Primary Button */
    .card-container:hover .secondary-button {
        background-color: #008080 !important;
        border-color: #008080 !important;
        color: white !important;
    }
</style>

<!-- Card Component -->
<div class="card-container">
    <!-- Fixed Image -->
    <img src="{{ $image }}" alt="Image" class="card-image">

    <!-- Card Content -->
    <div class="card-content">
        <h5 class="card-title">{{ $title }}</h5>

        <!-- Justified description -->
        <p class="card-description">{{ $description }}</p>

        <!-- Button Inside Card Content -->
        <div class="card-button-container">
            <!-- Use the secondary button component by default -->
            <x-buttons.secondary-button id="policyholder-button" class="secondary-button">{{ $buttonText }}</x-buttons.secondary-button>

        </div>
    </div>
</div>
