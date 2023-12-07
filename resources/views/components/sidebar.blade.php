<aside id="sidebar">
    <h1><a href="{{ route('home') }}">Pariwisata</a></h1>

    <img src="{{ asset('image/close.svg') }}" alt="close" width="30px" id="close">

    <ul>
        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
        <li><a href="{{ route('dashboard.destination.index') }}">Destination</a></li>
        <li><a href="{{ route('dashboard.gallery.index') }}">Gallery</a></li>
        <li><a href="{{ route('dashboard.setting.index') }}">Setting</a></li>
        <hr>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</aside>
