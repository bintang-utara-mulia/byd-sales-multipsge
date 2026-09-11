@extends('layouts.app')

@section('title', 'BYD Sales | Mobil Listrik Impian Anda')

@section('content')
@include('sections.hero')
@include('sections.about')
@include('sections.product')
@include('sections.promo')
@include('sections.testimonial')
@include('sections.faq')
@include('sections.contact')

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    alert("{{ session('success') }}");
    if ("{{ session('wa') }}") window.open("{{ session('wa') }}", '_blank');
});
</script>
@endif
@endsection
