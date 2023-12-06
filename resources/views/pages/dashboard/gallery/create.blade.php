@extends('layouts.dashboard')

@section('title')
    Create Gallery
@endsection

@section('content')
    <section class="create-destination">
        <hr>
        <form action="{{ route('dashboard.gallery.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="">Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
