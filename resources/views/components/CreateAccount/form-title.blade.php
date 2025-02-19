<style>
    .title-container {
        display: flex;
        flex-direction: column;
        text-align: {{ $align ?? 'left' }};
        width:100%;
        height:48px;
        border-left: 4px solid #003592;
    }
    .title-text {
        font-size: {{ $size ?? '23px' }};
        font-weight: {{ $weight ?? 'bold' }};
        color: {{ $color ?? 'black' }};
        font-family: 'Inter', sanserif;
        padding-left: 15px;
        padding-top: 10px;
    }
</style>

<div class="title-container">
    <h1 class="title-text">{{ $title }}</h1>
</div>
