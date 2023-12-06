@extends('layouts.app')

@section('title')
    Gallery - {{ $gallery->name }}
@endsection

@section('content')
<section class="show-gallery">
    <div class="flex">
        <img src="{{ asset($gallery->image) }}" alt="">
        <div>
            <h3>{{ $gallery->name }}</h3>
            <p>{{ $gallery->address }}</p>
        </div>
    </div>
</section>
@endsection
