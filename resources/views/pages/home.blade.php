@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<section class="home">
    <div class="hero" style="background-image: url('{{ $image }}');">
        <h1>Explore Kab. Tangerang</h1>
    </div>

    <div class="welcome">
        <p>{{ \App\Models\Setting::first()->about }}</p>
    </div>

    <div class="destination">
        <h2>Destination</h2>
        <div class="col">
            @foreach ($destination as $item)
            <div>
                <a href="{{ route('show.destination', $item->slug) }}">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                    <h4>{{ $item->name }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="destination">
        <h2>Most Viewed Destination</h2>
        <div class="col">
            @foreach ($mostViewedDestination as $item)
            <div>
                <a href="{{ route('show.destination', $item->slug) }}">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                    <h4>{{ $item->name }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="gallery">
        <h2>Gallery</h2>
        <div class="col">
            @foreach ($gallery as $item)
            <div>
                <a href="{{ route('show.gallery', $item->slug) }}">
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
