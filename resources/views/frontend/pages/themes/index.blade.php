@extends('frontend.layouts.app')
@section('title', 'Explore dashboard themes — Themehaus')
@section('content')
<section class="container collection">
    <div class="collection-heading">
        <div>
            <p class="eyebrow">The collection</p>
            <h1>Find your starting point.</h1>
            <p>A collection of great design. A world of possibilities.</p>
        </div><span>{{ $themes->total() }} curated themes</span>
    </div>
    <nav class="category-tabs" aria-label="Theme categories"><a class="{{ !request('category') ? 'active' : '' }}" href="{{ route('themes.index') }}">All themes</a>@foreach($categories as $category)<a class="{{ request('category') === $category ? 'active' : '' }}" href="{{ route('themes.index', array_merge(request()->query(), ['category' => $category])) }}">{{ $category }}</a>@endforeach</nav>
    <form class="filter-row" action="{{ route('themes.index') }}" method="GET"><label class="visually-hidden" for="theme-search">Search themes</label><input id="theme-search" name="search" value="{{ request('search') }}" placeholder="Search by theme name..."><label class="visually-hidden" for="technology">Technology</label><select id="technology" name="technology">
            <option value="">All technologies</option>@foreach($technologies as $technology)<option value="{{ $technology }}" @selected(request('technology')===$technology)>{{ $technology }}</option>@endforeach
        </select><label class="visually-hidden" for="feature">Feature</label><select id="feature" name="feature">
            <option value="">Any feature</option>@foreach($features as $feature)<option value="{{ $feature }}" @selected(request('feature')===$feature)>{{ $feature }}</option>@endforeach
        </select><label class="visually-hidden" for="sort">Sort themes</label><select id="sort" name="sort">
            <option value="recommended">Recommended</option>
            <option value="new" @selected(request('sort')==='new' )>Newest first</option>
            <option value="price-low" @selected(request('sort')==='price-low' )>Price: low to high</option>
        </select><button class="button button-outline">Apply filters</button></form>
    <p class="result-count">Showing {{ $themes->count() }} of {{ $themes->total() }} themes</p>
    <div class="theme-grid">@forelse($themes as $theme)@include('partials.theme-card', ['theme' => $theme])@empty<div class="empty-state">
            <h2>No themes in this view.</h2>
            <p>Try another search or clear a filter to see more of the collection.</p><a class="button button-outline" href="{{ route('themes.index') }}">Clear filters</a>
        </div>@endforelse</div>
    <div class="pagination">{{ $themes->links() }}</div>
</section>
<section class="container cta">
    <div>
        <h2>A little more you.</h2>
        <p>Tell us what your product needs.</p>
    </div><a class="button" href="{{ route('contact', ['kind' => 'customize']) }}">Request customization ↗</a>
</section>
@endsection