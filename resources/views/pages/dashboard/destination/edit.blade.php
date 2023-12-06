@extends('layouts.dashboard')

@section('title')
    Edit Destination
@endsection

@section('content')
    <section class="section-form">
        <hr>
        <form action="{{ route('dashboard.destination.update', $destination->slug) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" value="{{ $destination->image }}" name="oldImage">
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $destination->name }}">
                @error('name')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image">
                @error('image')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price" value="{{ $destination->price }}">
                @error('price')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ $destination->address }}</textarea>
                @error('address')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $destination->description }}</textarea>
                @error('description')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
@endsection
