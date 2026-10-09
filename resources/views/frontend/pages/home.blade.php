@extends('frontend.layouts.app')
@section('title', 'Themehaus — Great dashboards. Even better beginnings.')
@section('content')
@php
$featuredThemes=[];
$newThemes=[];
@endphp
<div class="container">
    <div class="announcement"><strong>A little something new</strong><span>Fresh designs just landed. Your next project starts here.</span><a href="{{ route('themes.index', ['sort' => 'new']) }}">Take a look ↗</a></div>
</div>
<section class="container hero">
    <div class="hero-copy">
        <p class="eyebrow">Designed to give you a head start</p>
        <h1>Great dashboards.<br>Even better <em>beginnings.</em></h1>
        <p>Thoughtfully crafted dashboard themes for your next big thing.<br>Find your fit. Make it yours. Build something great.</p>
        <div class="hero-points"><span>Beautiful by design</span><span>Developer-friendly</span><span>Made to be yours</span></div>
    </div>
    <div class="hero-aside"><span aria-hidden="true">✳</span>
        <p>A good idea deserves<br>a great foundation.</p>↓
    </div>
</section>
<section class="container section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">The ones to watch</p>
            <h2>A few of our favorites.</h2>
        </div><a href="{{ route('themes.index') }}">Explore all themes ↗</a>
    </div>
    <div class="theme-grid theme-grid-featured">@forelse($featuredThemes as $theme)@include('partials.theme-card', ['theme' => $theme])@empty<p>No featured themes yet.</p>@endforelse</div>
</section>
<section class="statement">
    <div class="container statement-inner">
        <p class="eyebrow">A better kind of head start</p>
        <h2>Skip the blank canvas.<br>Keep the good decisions.</h2>
        <p>Explore the details, see how each theme scales, then make a considered foundation your own.</p><a class="button" href="{{ route('about') }}">Meet Themehaus ↗</a>
    </div>
</section>
<section class="container section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">Fresh from the studio</p>
            <h2>New perspectives, ready to go.</h2>
        </div>
    </div>
    <div class="theme-grid">@forelse($newThemes as $theme)@include('partials.theme-card', ['theme' => $theme])@empty<p>New themes are on the way.</p>@endforelse</div>
</section>
<section class="container cta">
    <div>
        <h2>A little more you.</h2>
        <p>Found a theme you love? Tell us what your product needs.</p>
    </div><a class="button" href="{{ route('contact', ['kind' => 'customize']) }}">Let's create something ↗</a>
</section>
@endsection