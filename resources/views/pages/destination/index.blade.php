@extends('layouts.app')

@section('title')
    Destination
@endsection

@section('content')
<section class="destination">
    <h1>Destination</h1>
    <div class="grid">
        @foreach ($destination as $item)
        <div>
            <a href="{{ route('show.destination', $item->slug) }}">
                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                <h4>{{ $item->name }}</h4>
            </a>
        </div>
        @endforeach
    </div>
</section>
@endsection
