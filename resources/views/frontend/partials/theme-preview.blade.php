<div class="dashboard-preview" style="--preview-accent: {{ $theme['accent'] ?? '#c75024' }}; --preview-side: {{ $theme['side'] ?? '#292725' }}; --preview-bg: {{ $theme['canvas'] ?? '#f7f6f4' }}" aria-label="{{ $theme['name'] }} dashboard concept">
  <div class="preview-top"><i></i><i></i><i></i><span></span></div>
  <div class="preview-layout">
    <aside><b></b><i></i><i></i><i></i><i></i></aside>
    <div class="preview-main">
      <div class="preview-title"><b>{{ $theme['preview_title'] ?? 'Overview' }}</b><span></span></div>
      <div class="preview-metrics"><i></i><i></i><i></i></div>
      <div class="preview-chart"><svg viewBox="0 0 400 90" preserveAspectRatio="none" aria-hidden="true">
          <path d="M0 68 C35 60 42 28 80 44 S135 68 172 36 S235 56 275 24 S345 45 400 8" fill="none" stroke="var(--preview-accent)" stroke-width="4" />
        </svg></div>
      <div class="preview-table"><i></i><i></i><i></i><i></i></div>
    </div>
  </div>
</div>