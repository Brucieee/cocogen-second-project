@props(['currentStep'])

<div class="stepper-container">
    <!-- Logo -->
    <div class="logo-container">
        <img src="{{ asset('assets/icons/Icon-Cocogen.png') }}" alt="Logo" class="logo {{ $currentStep >= 3 ? 'enlarged' : '' }}">
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
        justify-content: center;
        width: 185px;
        height: auto;
        background-color: var(--Primary-Teal, #008080);
        padding: 35px 35px 417px 35px;
        margin: 0;
        gap: 97px;
    }

    .logo-container {
        width: 220px;
        /* Keep the width fixed */
        height: 61px;
        /* Let the container adjust based on the logo size */
        overflow: hidden;
        /* Ensure logo doesn't overflow outside */
        display: flex;
        justify-content: center;
        align-items: flex-start;
        /* Align logo to the top of the container */
        margin-top: 0;
        /* Remove any margin from the container */
    }

    .logo {
        width: 250px;
        /* Maintain aspect ratio */
        height: 61px;
        /* Allow logo height to adjust based on width */
        object-fit: contain;
        /* Prevent image distortion */
        transition: transform 0.3s ease-in-out;
        /* Smooth transition for scaling */
        transform-origin: center center;
        /* Center the scale transformation */
        margin-top: 0;
        /* Remove any default margin on top */
    }

    .logo.enlarged {
        transform: scale(3);
        /* Scale the logo by 3x or adjust this value */
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
        background: var(--Teal-LVL-0, #D7DEE3);
        z-index: 1;
    }

    .check-icon {
        width: 28px;
        height: 28px;
        visibility: hidden;
        flex-shrink: 0;
        object-fit: contain;
    }

    .step-number {
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        font-weight: 700;
        color: #848A90;
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