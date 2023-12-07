@extends('layouts.app')

@section('title')
    Gallery - {{ $gallery->name }}
@endsection

@section('content')
<section class="show-content">

    <div class="breadcrumbs">
        <span><a href="{{ route('gallery') }}" class="breadcrumbs-link">Gallery /</a></span>
        <span><a href="{{ route('show.destination', $gallery->slug) }}" class="breadcrumbs-link">{{ $gallery->name }} /</a></span>
    </div>

    <div class="flex">
        <img src="{{ asset($gallery->image) }}" alt="">
        <div>
            <h3>{{ $gallery->name }}</h3>
            <p>{{ $gallery->address }}</p>
        </div>
    </div>
</section>
@endsection
