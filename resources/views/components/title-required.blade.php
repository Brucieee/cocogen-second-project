<style scoped>
  .title-required {
    width: auto;
    height: auto;
    color: var(--Primary-Black-Text, #303030);
    font-family: Inter, sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 24px;
  }

  .required {
    color: var(--Status-Danger, #DD0707);
    margin-left: 4px;
  }

  .custom-placeholder {
    background: transparent;
    color: var(--Primary-Caption-Black-text, #585858);
    font-family: Inter, sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 24px;
    margin-left: 8px;
    cursor: default; /* Prevent loading cursor */
    opacity: 1; /* Ensure full opacity for correct color */
  }
</style>

<div class="title-required">
  <span class="title-text">
    {{ $title }}
    @if($required)
      <span class="required">*</span>
    @endif
    @if(isset($placeholder) && $placeholder)
      <span class="custom-placeholder">{{ $placeholder }}</span>
    @endif
  </span>
</div>