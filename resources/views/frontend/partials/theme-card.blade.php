<article class="theme-card">
  <a class="theme-visual" href="{{ route('themes.show', ['theme' => $theme['slug']]) }}" aria-label="Explore {{ $theme['name'] }}">
    @include('frontend.partials.theme-preview', ['theme' => $theme])
    @if(!empty($theme['badge']))<span class="preview-badge">{{ $theme['badge'] }}</span>@endif
  </a>
  <div class="theme-card-info">
    <div class="theme-card-heading">
      <h3><a href="{{ route('themes.show', ['theme' => $theme['slug']]) }}">{{ $theme['name'] }}</a></h3><strong>${{ number_format($theme['price'], 0) }} <small>USD</small></strong>
    </div>
    <p>{{ $theme['description'] }}</p>
    <div class="theme-meta"><span>{{ $theme['technology'] ?? 'React' }}</span><span>{{ $theme['category'] }}</span></div>
    <div class="card-actions">
      <a class="button button-outline" href="{{ route('contact', ['theme' => $theme['slug'], 'kind' => 'purchase']) }}">Purchase enquiry</a>
      <a class="text-action" href="{{ route('contact', ['theme' => $theme['slug'], 'kind' => 'customize']) }}">Customize ↗</a>
    </div>
  </div>
</article>