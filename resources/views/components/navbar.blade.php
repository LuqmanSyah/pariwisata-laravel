<nav id="nav">
    <h1><a href="{{ route('home') }}">{{ \App\Models\Setting::first()->site_name }}</a></h1>

    <div id="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <ul id="menu-list" class="hidden">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('destination') }}">Destination</a></li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
    </ul>
</nav>
