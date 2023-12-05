@extends('layouts.app')

@section('title')
    Gallery
@endsection

@section('content')
<section class="gallery">
    <h1>Gallery</h1>
    <div class="grid">
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
        <div>
            <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
        </div>
        <div>
            <img src="{{ asset('image/Benteng-Heritage.jpg') }}" alt="">
        </div>
    </div>
</section>
@endsection
