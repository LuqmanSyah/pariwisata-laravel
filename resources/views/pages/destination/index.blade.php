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
            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
            <h4>{{ $item->name }}</h4>
        </div>
        @endforeach
    </div>
</section>
@endsection
