@props(['currentStep'])

<!-- Bootstrap-Based Styles -->
<style>
.stepper-container {
    width: 255px;
    height: 831.5px;
    position: fixed;
    left: 0;
    top: 0;
    background-color: #008080;
    padding: 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 97px;
    overflow: hidden;
}

.logo-container img {
    width: 220px;
    height: 61px;
    object-fit: contain;
}

.steps-wrapper {
    display: flex;
    flex-direction: column;
    width: 100%;
}

.step {
    display: flex;
    align-items: center;
    gap: 15px; /* Updated gap to 15px */
    position: relative;
}

.circle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 1px solid #008080;
    background: #D7DEE3;
    display: flex;
    justify-content: center;
    align-items: center;
}

.check-icon {
    width: 28px;
    height: 28px;
    object-fit: contain;
    display: none;
}

.step-number {
    font-size: 12px;
    font-weight: 700;
    color: #848A90;
}

.step-text {
    font-size: 12px;
    font-weight: 700;
    color: #FFF;
}

.step.completed .circle {
    background-color: #FFF;
    border-color: #FFF;
}

.step.completed .check-icon {
    display: block;
}

.line {
    width: 2px;
    height: 38px;
    background-color: #D7DEE3;
    margin-left: 14px;
}

.line.active {
    background-color: #FFF;
}

.step-text.inactive {
    color: #D7DEE3;
}

/* Responsive Styles */
@media screen and (max-width: 767px) {
    .stepper-container {
        width: 100%;
        height: auto;
        position: static;
        padding: 20px;
        gap: 30px;
    }

    .logo-container img {
        width: 150px;
        height: 42px;
    }

    .steps-wrapper {
        gap: 10px;
    }

    .step {
        flex-direction: column;
        gap: 10px;
    }

    .circle {
        width: 28px;
        height: 28px;
    }

    .step-number {
        font-size: 10px;
    }

    .step-text {
        font-size: 10px;
    }

    .line {
        height: 20px;
    }
}
</style>

<div class="stepper-container">
    <!-- Logo -->
    <div class="logo-container text-center">
        <img src="{{ asset('assets/icons/Icon-Cocogen.png') }}" alt="Logo" class="logo {{ $currentStep >= 3 ? 'enlarged' : '' }}">
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
            <div class="step d-flex align-items-center {{ $currentStep >= $step ? 'completed' : '' }}">
                <div class="circle d-flex justify-content-center align-items-center">
                    @if ($currentStep >= $step)
                        <img src="{{ asset('assets/icons/Icon-CheckWhiteCircleGreen.svg') }}" alt="Step {{ $step }}" class="check-icon">
                    @else
                        <span class="step-number">{{ $step }}</span>
                    @endif
                </div>
                <div class="step-text {{ $currentStep < $step ? 'inactive' : '' }}">{{ $text }}</div>
            </div>

            @if ($step < 3)
                <div class="line {{ $currentStep > $step ? 'active' : '' }}"></div>
            @endif
        @endforeach
    </div>
</div>
