@extends('frontend.layouts.app')
@section('title', $theme['name'].' — Themehaus')
@section('content')
<section class="container detail-page"><a class="back-link" href="{{ route('themes.index') }}">← All themes</a>
    <div class="detail-grid">
        <div class="detail-preview">@include('partials.theme-preview', ['theme' => $theme])<div class="preview-caption">Dashboard concept · responsive layout</div>
        </div>
        <aside class="detail-info">
            <p class="eyebrow">{{ $theme['category'] }}</p>
            <h1>{{ $theme['name'] }}</h1>
            <p>{{ $theme['description'] }}</p>
            <div class="detail-price">${{ number_format($theme['price'], 0) }} <small>one-time license · illustrative pricing</small></div><a class="button button-block" href="{{ route('contact', ['theme' => $theme['slug'], 'kind' => 'purchase']) }}">Enquire about purchase</a><a class="button button-outline button-block" href="{{ route('contact', ['theme' => $theme['slug'], 'kind' => 'customize']) }}">Request customization</a>
            <p class="demo-note">Demonstration only. No payment is processed.</p>
            <h2>Works with</h2>
            <div class="tag-list">@foreach($theme['stack'] ?? [] as $item)<span>{{ $item }}</span>@endforeach</div>
        </aside>
    </div>
    <div class="detail-description">
        <h2>Built to be a better beginning.</h2>
        <p>{{ $theme['long_description'] ?? $theme['description'] }}</p>
        <h2>Inside the frame</h2>
        <ul>@foreach($theme['features'] ?? [] as $feature)<li>{{ $feature }}</li>@endforeach</ul>
    </div>
</section>
@endsection