<div class="card-container" style="
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
    border: 1px solid #008080;
    background: #F0FAFF;
    font-family: 'Inter', sans-serif;
    box-sizing: border-box;
    overflow: hidden;
">

    <!-- Fixed Image -->
    <img src="{{ $image }}" alt="Image" style="
        width: 292px !important;
        height: 300px !important;
        border-radius: 5px;
        background: lightgray 50% / cover no-repeat;
        object-fit: cover;
        flex-shrink: 0;
        display: block;
    ">

    <!-- Card Content -->
    <div class="card-content" style=" 
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%; /* Ensures content stretches fully */
        flex-grow: 1; /* This allows the content to fill the available space */
    ">
        <h5 style="
            color: #2D2727;
            font-size: 23px;
            font-weight: 700;
            line-height: normal;
            margin: 10px 0;
        ">{{ $title }}</h5>

        <p style="
            color: #3B3939;
            font-size: 14px;
            font-weight: 500;
            line-height: 24px;
            margin: 10px 0;
        ">{{ $description }}</p>

        <!-- Button Inside Card Content -->
        <div style=" 
            width: 100%; /* Ensures button takes the full width of card-content */
            margin-top: auto; /* Pushes button to the bottom of the content */
        ">
            <x-buttons.primary-button>{{ $buttonText }}</x-buttons.primary-button>
        </div>
    </div>

</div>
