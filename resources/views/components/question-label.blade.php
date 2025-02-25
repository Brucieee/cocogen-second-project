@props(['text', 'required' => false, 'size' => '16px', 'weight' => '400', 'style' => 'normal', 'info' => ''])

<p class="mb-1" style="font-size: {{ $size }}; font-weight: {{ $weight }}; font-style: {{ $style }};">
    {{ $text }}
    @if($required)
        <span style="color: red;">*</span>
        @if($info)
            <span style="color: #6c757d;">({{ $info }})</span>
        @endif
    @endif
</p>
