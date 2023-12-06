@extends('layouts.dashboard')

@section('title')
    Edit Gallery
@endsection

@section('content')
    <section class="create-destination">
        <hr>
        <form action="{{ route('dashboard.gallery.update', $gallery->slug) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="{{ $gallery->image }}" name="oldImage">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $gallery->name }}">
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ $gallery->address }}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
@endsection
