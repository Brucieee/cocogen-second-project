@props(['text', 'required' => false, 'size' => '16px', 'weight' => '400', 'style' => 'normal'])

<p class="mb-1" style="font-size: {{ $size }}; font-weight: {{ $weight }}; font-style: {{ $style }};">
 {{ $text }}
 @if($required)
 <span style="color: red;">*</span>

 @endif
</p>