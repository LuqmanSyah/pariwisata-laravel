@extends('layouts.dashboard')

@section('title')
    Setting Website
@endsection

@section('content')
    <section class="section-form">
        <hr>
        <span><a href="{{ route('dashboard.index') }}" class="breadcrumbs-link">Dashboard /</a></span>
        <span><a href="{{ route('dashboard.setting.index') }}" class="breadcrumbs-link">Setting /</a></span>

        <form action="{{ route('dashboard.setting.update') }}" method="POST" enctype="multipart/form-data" style="margin-top:
        30px;">
            @csrf
            <input type="hidden" name="oldImage" value="{{ $setting->parallax_image }}">
            <div>
                <label for="">Site Name</label>
                <input type="text" name="site_name" value="{{ $setting->site_name }}">
                @error('name')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Parallax Image</label>
                <input type="file" name="parallax_image">
                @error('name')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $setting->email }}">
                @error('name')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Phone Number</label>
                <input type="number" name="phone_number" value="{{ $setting->phone_number }}">
                @error('name')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10">{{ $setting->address }}</textarea>
                @error('image')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="">About</label>
                <textarea name="about" id="" cols="30" rows="10">{{ $setting->about }}</textarea>
                @error('address')
                    <span class="invalid-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
@endsection
