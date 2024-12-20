@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
<div role="main" class="main">
    @include('frontend.home.sections.hero')
    @include('frontend.home.sections.about')
    @include('frontend.home.sections.logos')
    @include('frontend.home.sections.what-we-do')
    @include('frontend.home.sections.benefits')
    @include('frontend.home.sections.how-we-work')
    @include('frontend.home.sections.skills')
    {{-- @include('frontend.home.sections.team')
    @include('frontend.home.sections.contact') --}}
</div>
@endsection

@push('css')
<style></style>
@endpush

@push('js')
<script></script>
@endpush
