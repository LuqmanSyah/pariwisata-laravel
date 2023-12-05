@extends('layouts.dashboard')

@section('title')
    Create Destination
@endsection

@section('content')
    <section class="create-destination">
        <hr>
        <form action="" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text">
            </div>
            <div>
                <label for="">Image</label>
                <input type="file">
            </div>
            <div>
                <label for="">Price</label>
                <input type="text">
            </div>
            <div>
                <label for="">Address</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
