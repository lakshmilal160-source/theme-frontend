@extends('frontend.layouts.app')
@section('title', 'Contact Themehaus')
@section('content')
<section class="container contact-page">
    <div class="contact-intro">
        <p class="eyebrow">Let’s make something great</p>
        <h1>Good things start<br>with a conversation.</h1>
        <p>A question, a project, or a big idea.<br>We’d love to hear what you have in mind.</p>
        <div class="contact-prompt"><strong>Find your perfect theme</strong><span>Questions about design or technology? Let’s talk.</span></div>
        <div class="contact-prompt"><strong>Make something your own</strong><span>Tell us about the changes your project needs.</span></div>
    </div>
    <div class="contact-form-wrap">
        <h2>Tell us what’s on your mind.</h2>
        @if(session('success'))<div class="form-success" role="status">{{ session('success') }}</div>@endif
        <form method="POST" action="{{ route('contact.submit') }}" enctype="multipart/form-data" data-demo-form>@csrf
            <div class="form-fields">
                <div><label for="name">Your name *</label><input id="name" name="name" autocomplete="name" required value="{{ old('name') }}"></div>
                <div><label for="email">Email address *</label><input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"></div>
                <div class="field-wide"><label for="company">Company <span>(optional)</span></label><input id="company" name="company" autocomplete="organization" value="{{ old('company') }}"></div>
                <div class="field-wide"><label for="theme">Theme of interest</label><select id="theme" name="theme">@foreach($themes as $theme)<option value="{{ $theme['slug'] }}" @selected(old('theme', request('theme'))===$theme['slug'])>{{ $theme['name'] }}</option>@endforeach</select></div>
                <div class="field-wide"><label for="message">What would you like to customize? *</label><textarea id="message" name="message" required>{{ old('message') }}</textarea></div>
                <div class="field-wide"><label for="reference">Reference images or files (optional)</label><input id="reference" name="reference[]" type="file" accept=".png,.jpg,.jpeg,.pdf,.zip" multiple><small>Selection is local in this starter. File handling and storage need a backend implementation.</small></div>
            </div>
            <p class="demo-note">Frontend demonstration only: no email is sent, file is uploaded, or payment is taken until backend routes and services are implemented. Reference file selection stays in this browser.</p>
            <div class="form-success" role="status" aria-live="polite"></div><button class="button button-block" type="submit">Send enquiry ↗</button>
        </form>
    </div>
</section>
@endsection