<style>
    .title-container {
        display: flex;
        flex-direction: column;
        text-align: left; /* Default text alignment */
        width: 100%;
        height: 48px;
        border-left: 3px solid var(--Secondary-Blue, #003592); /* Updated border-left */
        border-radius: 2px; /* Added border-radius */
    }
    .title-text {
        font-size: 23px; /* Default font size */
        font-weight: bold; /* Default font weight */
        color: black; /* Default text color */
        font-family: 'Inter', sans-serif;
        padding-left: 15px;
        padding-top: 10px;
    }
</style>

<div class="title-container">
    <h1 class="title-text">{{ $title }}</h1>
</div>
