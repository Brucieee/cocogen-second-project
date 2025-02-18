@props(['currentStep'])

<div class="stepper-container">
    <!-- Logo -->
    <div class="logo-container">
        <img src="{{ asset('assets/icons/Icon-Cocogen.png') }}" alt="Logo" class="logo">
    </div>

    <!-- Circles and Lines -->
    <div class="steps-wrapper">
        <!-- Step 1 -->
        <div class="step {{ $currentStep >= 1 ? 'completed' : '' }}">
            <div class="circle">
                @if ($currentStep >= 1)
                <img src="{{ asset('assets/icons/Icon-CheckWhiteCircleGreen.svg') }}" alt="Step 1" class="check-icon">
                @else
                <span class="step-number">1</span>
                @endif
            </div>
            <div class="step-text {{ $currentStep < 1 ? 'inactive' : '' }}">Select Account</div>
        </div>

        <div class="line {{ $currentStep >= 2 ? 'active' : '' }}"></div>

        <!-- Step 2 -->
        <div class="step {{ $currentStep >= 2 ? 'completed' : '' }}">
            <div class="circle">
                @if ($currentStep >= 2)
                <img src="{{ asset('assets/icons/Icon-CheckWhiteCircleGreen.svg') }}" alt="Step 2" class="check-icon">
                @else
                <span class="step-number">2</span>
                @endif
            </div>
            <div class="step-text {{ $currentStep < 2 ? 'inactive' : '' }}">Your Identity</div>
        </div>

        <div class="line {{ $currentStep >= 3 ? 'active' : '' }}"></div>

        <!-- Step 3 -->
        <div class="step {{ $currentStep >= 3 ? 'completed' : '' }}">
            <div class="circle">
                @if ($currentStep >= 3)
                <img src="{{ asset('assets/icons/Icon-CheckWhiteCircleGreen.svg') }}" alt="Step 3" class="check-icon">
                @else
                <span class="step-number">3</span>
                @endif
            </div>
            <div class="step-text {{ $currentStep < 3 ? 'inactive' : '' }}">Account Created</div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    .stepper-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 255px;
        height: 831.5px;
        background-color: var(--Primary-Teal, #008080);
        padding: 35px;
        gap: 97px; /* Ensures 97px gap between logo and steps */
    }

    .logo-container {
        width: 185px;
        height: 61px;
        margin-bottom: 0; /* Removed extra space between logo and steps */
    }

    .logo {
        width: 185px;
        height: 61px;
        object-fit: contain;
    }

    .steps-wrapper {
        width: 185px;
        height: 155px;
        display: flex;
        flex-direction: column;
        align-items: left;
        gap: 15px;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 15px;
        position: relative;
    }

    .circle {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 28px;
        height: 28px;
        padding: 0;
        flex-direction: column;
        border-radius: 50%;
        border: 1px solid var(--Primary-Teal, #008080);
        background: var(--Teal-LVL-0, #F7FFFF);
        z-index: 1;
    }

    .check-icon {
        width: 28.438px;
        height: 28.438px;
        visibility: hidden;
        flex-shrink: 0;
        object-fit: contain;
    }

    .step-number {
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: #D7DEE3;
    }

    .step-text {
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: var(--Primary-White, #FFF);
    }

    .step.completed .circle {
        background-color: #FFFFFF;
        border-color: #FFFFFF;
    }

    .step.completed .check-icon {
        visibility: visible;
    }

    .line {
        width: 1px;
        height: 38px;
        background-color: #D7DEE3;
        margin-left: 14px;
        margin-top: -20px;
        margin-bottom: -15px;
    }

    .line.active {
        background-color: #FFFFFF;
    }

    .step-text.completed {
        color: #FFFFFF;
    }

    .step-text.inactive {
        color: #D7DEE3;
    }
</style>
