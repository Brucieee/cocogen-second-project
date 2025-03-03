<style>
.stepper-container {
    width: 255px;
    height: auto;
    position: sticky;
    top: 0;
    left: 0;
    background-color: #008080;
    padding: 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 97px;
    pointer-events: auto;
}

.main-content {
    margin-left: 255px; 
    padding: 20px;
    position: relative;
    pointer-events: auto; 
}

.logo-container img {
    width: 220px;
    height: 61px;
    object-fit: contain;
}

.steps-wrapper {
    display: flex;
    flex-direction: column;
    width: 185px;
    height: 155px;
    gap: 15px;
    position: relative;
}

.step {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    gap: 15px;
    position: relative;
}

.step-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 32px;
    position: relative;
}

.circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #D7DEE3;
    background: #D7DEE3;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
}

.step.completed .circle {
    background-color: #FFF; /* Active background */
    border-color: #FFF;
}

.step-number {
    font-size: 12px;
    font-weight: 700;
    color: #848A90;
}

.line {
    position: absolute;
    top: 32px;
    left: 50%;
    width: 1px;
    height: 100%;
    background-color: #D7DEE3;
    z-index: 0;
}

.line.active {
    background-color: #FFF;
}

.step-right {
    flex-grow: 1;
    font-size: 12px;
    font-weight: 700;
    display: flex;
    align-items: center;
    color: #D7DEE3; /* Default inactive */
}

.step.completed .step-right {
    color: #FFF; /* Active text */
}

.step:not(:last-child) .line {
    display: block;
}

.step:last-child .line {
    display: none;
}
</style>

<div class="stepper-container">
    <!-- Logo -->
    <div class="logo-container text-center">
        <img src="{{ asset('assets/icons/Icon-Cocogen.png') }}" alt="Logo">
    </div>

    <!-- Steps -->
    <div class="steps-wrapper">
        @php
            $steps = [
                1 => 'Select Account',
                2 => 'Your Identity',
                3 => 'Account Created'
            ];
        @endphp

        @foreach ($steps as $step => $text)
            <div class="step {{ $currentStep >= $step ? 'completed' : '' }}">
                <!-- Left: Circle -->
                <div class="step-left">
                    <div class="circle">
                        @if ($currentStep >= $step)
                            <img src="{{ asset('assets/icons/Icon-CheckWhiteCircleGreen.svg') }}" alt="Step {{ $step }}" class="check-icon">
                        @else
                            <span class="step-number">{{ $step }}</span>
                        @endif
                    </div>
                    @if ($step < 3)
                        <div class="line {{ $currentStep >= $step ? 'active' : '' }}"></div>
                    @endif
                </div>

                <div class="step-right {{ $currentStep < $step ? 'inactive' : '' }}">
                    {{ $text }}
                </div>
            </div>
        @endforeach
    </div>
</div>
