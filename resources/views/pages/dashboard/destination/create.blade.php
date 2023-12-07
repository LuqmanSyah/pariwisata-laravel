@extends('layouts.dashboard')

@section('title')
    Create Destination
@endsection

@section('content')
    <section class="section-form">
        <hr>
        <span><a href="{{ route('dashboard.index') }}" class="breadcrumbs-link">Dashboard /</a></span>
        <span><a href="{{ route('dashboard.destination.index') }}" class="breadcrumbs-link">Destination /</a></span>
        <span><a href="{{ route('dashboard.destination.create') }}" class="breadcrumbs-link">Create /</a></span>
        <form action="{{ route('dashboard.destination.store') }}" enctype="multipart/form-data" method="POST" style="margin-top: 30px">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
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
                <input type="number" name="price">
                @error('price')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
                @error('address')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
                @error('description')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
