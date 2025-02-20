@props(['currentStep'])

<!-- Bootstrap-Based Styles -->
<style>
.stepper-container {
    width: 255px;
    min-height: 100vh;
    position: sticky;
    top: 0;
    left: 0;
    background-color: #008080;
    padding: 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 50px; /* Space between logo and steps */
    overflow: hidden;
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
    height: 155px; /* Fixed height for the steps wrapper */
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
    height: 100%; /* Ensures circles stay in place */
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
    z-index: 1; /* Ensure circle is on top of the line */
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
    top: 32px; /* Position the line below the circle */
    left: 50%;
    width: 1px;
    height: 100%; /* Stretches through the gap */
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

/* Second Column (Step Text) */
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

/* Connect line should only be visible between steps */
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
                    <!-- Line (Connects circles) -->
                    @if ($step < 3) <!-- Don't show line after the last step -->
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
