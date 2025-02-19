<div class="card-container" style="
    width: 332px;
    height: 564px;
    display: flex;
    padding: 20px;
    flex-direction: column;
    align-items: flex-start;
    gap: 35px;
">
    <img src="{{ $image }}" alt="Image" style="
        width: 292px;
        height: 300px;
        border-radius: 5px;
        background: lightgray 50% / cover no-repeat;
        align-self: stretch;
    ">
    
    <div class="card-content" style="
        display: flex;
        width: 292px;
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    ">
        <h5 style="
            display: flex;
            padding: 10px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            color: #2D2727;
            font-family: Inter;
            font-size: 23px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        ">{{ $title }}</h5>
        
        <p style="
            display: flex;
            padding: 10px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            align-self: stretch;
            color: #3B3939;
            font-family: Inter;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px;
        ">{{ $description }}</p>
    </div>
    
    <div class="d-flex justify-content-center w-100">
        <button class="btn btn-primary">{{ $buttonText }}</button>
    </div>
</div>