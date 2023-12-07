@extends('layouts.dashboard')

@section('title')
    Create Gallery
@endsection

@section('content')
    <section class="section-form">
        <hr>
        <span><a href="{{ route('dashboard.index') }}" class="breadcrumbs-link">Dashboard /</a></span>
        <span><a href="{{ route('dashboard.gallery.index') }}" class="breadcrumbs-link">Gallery /</a></span>
        <span><a href="{{ route('dashboard.gallery.create') }}" class="breadcrumbs-link">Create /</a></span>
        
        <form action="{{ route('dashboard.gallery.store') }}" enctype="multipart/form-data" method="POST" style="margin-top: 30px">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}">
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
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ old('address') }}</textarea>
                @error('address')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
