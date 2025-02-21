<style>
/* Stepper Container */
.stepper-container {
    width: 255px;
    height: 100%;
    position:sticky; /* Keeps it locked on the left */
    top: 0;
    left: 0;
    background-color: #008080;
    padding: 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 50px;
    pointer-events: auto; /* Ensures it can interact with the user */
    display:static;
}

/* Ensure main content does not go behind the stepper */
.main-content {
    margin-left: 255px; /* Push content to the right of the stepper */
    padding: 20px;
    position: relative;
    pointer-events: auto; /* Enable interactions with content */
}

/* Logo */
.logo-container img {
    width: 220px;
    height: 61px;
    object-fit: contain;
}

/* Steps Wrapper */
.steps-wrapper {
    display: flex;
    flex-direction: column;
    width: 185px;
    height: 155px;
    gap: 15px;
    position: relative;
}

/* Step Row */
.step {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    gap: 15px;
    position: relative;
}

/* First Column (Circle) */
.step-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 32px;
    position: relative;
}

/* Circle */
.circle {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #008080;
    background: #D7DEE3;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
}

/* Step Number */
.step-number {
    font-size: 12px;
    font-weight: 700;
    color: #848A90;
}

/* Line */
.line {
    position: absolute;
    top: 32px;
    left: 50%;
    width: 1px;
    height: 100%;
    background-color: #D7DEE3;
    z-index: 0;
}

/* Active Step */
.step.completed .circle {
    background-color: #FFF;
    border-color: #FFF;
}

/* Active Line */
.line.active {
    background-color: #FFF;
}

/* Step Text */
.step-right {
    flex-grow: 1;
    font-size: 12px;
    font-weight: 700;
    color: #FFF;
    display: flex;
    align-items: center;
}

.step-text.inactive {
    color: #D7DEE3;
}

/* Hide connecting line on last step */
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

                <!-- Right: Step Text -->
                <div class="step-right {{ $currentStep < $step ? 'inactive' : '' }}">
                    {{ $text }}
                </div>
            </div>
        @endforeach
    </div>
</div>
