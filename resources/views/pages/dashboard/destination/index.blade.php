@extends('layouts.dashboard')

@section('title')
    Destination
@endsection

@section('content')
    <section class="destination">
        <hr>
        <a href="{{ route('dashboard.destination.create') }}" class="btn">Create</a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destinations as $destination)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset($destination->image) }}" alt="{{ $destination->name }}">
                        </td>
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->address }}</td>
                        <td>{{ $destination->price }}</td>
                        <td>
                            <a href="">Show</a>
                            <a href="{{ route('dashboard.destination.edit', $destination->slug) }}">Edit</a>
                            <form action="{{ route('dashboard.destination.delete', $destination->slug) }}" method="POST">
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
