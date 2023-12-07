@extends('layouts.app')

@section('title')
    Destination - {{ $destination->name }}
@endsection

@section('content')
<section class="show-content">

    <div class="breadcrumbs">
        <span><a href="{{ route('destination') }}" class="breadcrumbs-link">Destination /</a></span>
        <span><a href="{{ route('show.destination', $destination->slug) }}" class="breadcrumbs-link">{{ $destination->name }} /</a></span>
    </div>

    <div class="flex">
        <img src="{{ asset($destination->image) }}" alt="">
        <div>
            <h3>{{ $destination->name }}</h3>
            <p>Harga : Rp {{ $destination->price }}</p>
            <p>Alamat : {{ $destination->address }}</p>
            <p>Deskripsi : {{ $destination->description }}</p>
        </div>
    </div>
</section>
@endsection
