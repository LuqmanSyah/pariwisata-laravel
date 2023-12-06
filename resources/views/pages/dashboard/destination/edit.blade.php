@extends('layouts.dashboard')

@section('title')
    Edit Destination
@endsection

@section('content')
    <section class="create-destination">
        <hr>
        <form action="{{ route('dashboard.destination.update', $destination->slug) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" value="{{ $destination->image }}" name="oldImage">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $destination->name }}">
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price" value="{{ $destination->price }}">
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ $destination->address }}</textarea>
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $destination->description }}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
@endsection
