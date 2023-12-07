<footer>
    <span style="display: none;">
        {{ $footerSetting = \App\Models\Setting::first() }}
    </span>

    <h2><a href="{{ route('home') }}">{{ $footerSetting->site_name }}</a></h2>

    <ul>
        <li><h2>Links</h2></li>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('destination') }}">Destination</a></li>
        <li><a href="{{ route('gallery') }}">Gallery</a></li>
    </ul>

    <ul>
        <li><h2>Contact Info</h2></li>
        <li>Address : {{ $footerSetting->address }}</li>
        <li>Contact : {{ $footerSetting->phone_number }}</li>
        <li>Email : {{ $footerSetting->email }}</li>
    </ul>
</footer>
