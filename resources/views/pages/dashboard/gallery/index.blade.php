@extends('layouts.dashboard')

@section('title')
    Gallery
@endsection

@section('content')
    <section class="destination">
        <hr>
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
                            <a href="">Show</a>
                            <a href="{{ route('dashboard.gallery.edit', $gallery->slug) }}">Edit</a>
                            <form action="{{ route('dashboard.gallery.delete', $gallery->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
