@extends('layouts.dashboard')

@section('title')
    Gallery
@endsection

@section('content')
    <section class="destination">
        <hr>
        <span><a href="{{ route('dashboard.index') }}" class="breadcrumbs-link">Dashboard /</a></span>
        <span><a href="{{ route('dashboard.gallery.index') }}" class="breadcrumbs-link">Gallery /</a></span>
        <a href="{{ route('dashboard.gallery.create') }}" class="btn">Create</a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->name }}">
                        </td>
                        <td>{{ $gallery->name }}</td>
                        <td>{{ $gallery->address }}</td>
                        <td>
                            <a href="{{ route('show.gallery', $gallery->slug) }}" class="show">Show</a>
                            <a href="{{ route('dashboard.gallery.edit', $gallery->slug) }}" class="edit">Edit</a>
                            <form action="{{ route('dashboard.gallery.delete', $gallery->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
