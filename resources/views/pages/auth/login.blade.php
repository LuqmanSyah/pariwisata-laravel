<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
</head>
<body>
    <form action="{{ route('process.login') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="username" name="username">
            @error ('username') 
                <span class="invalid-message">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="password" name="password">
            @error ('password') 
                <span class="invalid-message">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
