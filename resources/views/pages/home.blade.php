@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
<section class="home">
    <div class="hero">
        <img src="{{ asset('image/tebing-koja.jpg') }}" alt="tebing-koja" width="100%">
        <h1>Explore Kab. Tangerang</h1>
    </div>

    <div class="destination">
        <h2>Destination</h2>
        <div class="col">
            <div>
                <img src="{{ asset('image/kampung-bekelir.jpg') }}" alt="kampung-bekelir">
                <h4>Kampung Bekelir</h4>
            </div>
            <div>
                <img src="{{ asset('image/tebing-koja.jpg') }}" alt="tebing-koja">
                <h4>Tebing Koja</h4>
            </div>
            <div>
                <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="benteng-heritage">
                <h4>Benteng Heritage</h4>
            </div>
            <div>
                <img src="{{ asset('image/kampung-bekelir.jpg') }}" alt="kampung-bekelir">
                <h4></h4>
            </div>
        </div>
    </div>

    <div class="gallery">
        <h2>Gallery</h2>
        <div class="col">
            <div>
                <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection
