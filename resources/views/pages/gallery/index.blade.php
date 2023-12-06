@extends('layouts.app')

@section('title')
    Gallery
@endsection

@section('content')
<section class="gallery">
    <h1>Gallery</h1>
    <div class="grid">
        @foreach ($gallery as $item)
        <div>
            <a href="{{ route('show.gallery', $item->slug) }}">
                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
