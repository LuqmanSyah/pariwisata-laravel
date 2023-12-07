<footer>
    <h2><a href="{{ route('home') }}">{{ \App\Models\Setting::first()->site_name }}</a></h2>

    <ul>
        <li><h2>Links</h2></li>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('destination') }}">Destination</a></li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
    </ul>
</footer>
