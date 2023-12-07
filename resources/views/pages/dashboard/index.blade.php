@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
<section class="dashboard">
    <hr>
    <span><a href="" class="breadcrumbs-link">Dashboard /</a></span>
    <div class="col">
        <div>Destination : {{ $destination }}</div>
        <div>Gallery : {{ $gallery }}</div>
    </div>
</section>
@endsection
