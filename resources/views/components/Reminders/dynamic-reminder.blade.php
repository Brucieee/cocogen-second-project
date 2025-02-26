@props([
    'icon' => 'assets/icons/Icon-Lightbulb.svg',
    'message' => 'Your personal information is automatically entered in the form. If you need to update your information, go to Profile > Personal Information.',
    'fontWeight' => '400' // Default font weight
])

<div class="d-flex align-items-start gap-3 p-3 w-100 max-w-705" style="background-color: #FFF9EC;">
    <!-- Dynamic 24x24 SVG/Icon -->
    <div class="d-flex align-items-center justify-content-center" style="width: 24px; height: 24px;">
        <img src="{{ asset($icon) }}" alt="Icon" style="width: 24px; height: 24px;" />
    </div>

    <!-- Right Content -->
    <div style="color: #303030; font-family: 'Inter', sans-serif; font-size: 16px; font-weight: {{ $fontWeight }}; line-height: 24px;">
        {{ $message }}
    </div>
</div>
