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
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="{{ asset('image/kampung-bekelir.jpg') }}" alt="benteng">
                        </td>
                        <td>Kampung</td>
                        <td>Jalan</td>
                        <td>free</td>
                        <td>
                            <a href="">Show</a>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
