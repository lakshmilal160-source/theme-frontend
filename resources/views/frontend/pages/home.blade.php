@extends('frontend.layouts.app')
@section('title', 'Themehaus — Great dashboards. Even better beginnings.')
@section('content')
@php
$featuredThemes=[];
$newThemes=[];
@endphp
<!-- THEMEHAUS HERO BANNER -->
<section class="th-hero">
  <div class="th-hero-container">

    <!-- LEFT CONTENT -->
    <div class="th-hero-content">
      <div class="th-eyebrow">
        BEAUTIFUL THEMES FOR BIG IDEAS
      </div>

      <h1>
        Find a theme<br>
        that feels like <span>you.</span>
      </h1>

      <p class="th-description">
        Beautifully crafted website themes for every big idea.
        Launch your next project with modern, fast and flexible
        designs built for creators, businesses and brands.
      </p>

      <div class="th-hero-buttons">
        <a href="/themes" class="th-primary-btn">
          Explore all themes <span>→</span>
        </a>

        <a href="#how-it-works" class="th-secondary-btn">
          <span class="th-play-icon">▶</span>
          See how it works
        </a>
      </div>

      <div class="th-features">
        <div class="th-feature">
          <span class="th-feature-icon">◇</span>
          <span>Modern &amp; Professional<br>Designs</span>
        </div>

        <div class="th-feature">
          <span class="th-feature-icon">ϟ</span>
          <span>Fast, Lightweight<br>&amp; SEO Friendly</span>
        </div>

        <div class="th-feature">
          <span class="th-feature-icon">⚙</span>
          <span>Easy to Customize<br>No Coding Required</span>
        </div>
      </div>
    </div>

    <!-- RIGHT VISUAL -->
    <div class="th-hero-visual">

      <div class="th-visual-glow"></div>

      <!-- BACK WEBSITE PREVIEW -->
      <div class="th-preview th-preview-back">
        <div class="th-browser-bar">
          <i></i><i></i><i></i>
          <span></span>
        </div>
        <div class="th-preview-image th-restaurant">
          <div class="th-preview-overlay">
            <small>RESTAURANT THEME</small>
            <strong>Exceptional<br>Food Experiences.</strong>
            <span>Discover the menu →</span>
          </div>
        </div>
      </div>

      <!-- FRONT LEFT WEBSITE PREVIEW -->
      <div class="th-preview th-preview-left">
        <div class="th-browser-bar">
          <i></i><i></i><i></i>
          <span></span>
        </div>
        <div class="th-preview-image th-portfolio">
          <div class="th-preview-overlay">
            <small>FORMA STUDIO</small>
            <strong>Creative Ideas<br>for Modern Brands.</strong>
            <span>Explore our work →</span>
          </div>
        </div>
      </div>

      <!-- FRONT RIGHT WEBSITE PREVIEW -->
      <div class="th-preview th-preview-right">
        <div class="th-browser-bar">
          <i></i><i></i><i></i>
          <span></span>
        </div>
        <div class="th-preview-image th-fashion">
          <div class="th-preview-overlay">
            <small>MAISON COLLECTION</small>
            <strong>Modern<br>Essentials.</strong>
            <span>Shop collection →</span>
          </div>
        </div>
      </div>

      <div class="th-handwritten">
        Stunning designs<br>for every business
        <span>↙</span>
      </div>

    </div>
  </div>
</section>

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
    <div class="hero-aside">
        <div class="hero-site" aria-hidden="true">
            <div class="hero-site-chrome"><i></i><i></i><i></i><span></span></div>
            <div class="hero-site-body">
                <aside></aside>
                <div class="hero-site-main">
                    <b class="bar bar-1"></b>
                    <b class="bar bar-2"></b>
                    <b class="bar bar-3"></b>
                    <div class="hero-site-chart">
                        <span style="--h:42%"></span>
                        <span style="--h:68%"></span>
                        <span style="--h:54%"></span>
                        <span style="--h:82%"></span>
                        <span style="--h:60%"></span>
                    </div>
                </div>
            </div>
        </div>
        <p>A good idea deserves<br>a great foundation.</p>
        <span class="hero-scroll">↓</span>
    </div>
</section>
<section class="container section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">The ones to watch</p>
            <h2>A few of our favorites.</h2>
        </div><a href="{{ route('themes.index') }}">Explore all themes ↗</a>
    </div>
    <div class="theme-grid theme-grid-featured">@forelse($featuredThemes as $theme)@include('frontend.partials.theme-card', ['theme' => $theme])@empty<p>No featured themes yet.</p>@endforelse</div>
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
    <div class="theme-grid">@forelse($newThemes as $theme)@include('frontend.partials.theme-card', ['theme' => $theme])@empty<p>New themes are on the way.</p>@endforelse</div>
</section>
<section class="container cta">
    <div>
        <h2>A little more you.</h2>
        <p>Found a theme you love? Tell us what your product needs.</p>
    </div><a class="button" href="{{ route('contact', ['kind' => 'customize']) }}">Let's create something ↗</a>
</section>
@endsection