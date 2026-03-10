<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <style>
        * { margin:0; padding: 0; box-sizing: border-box }
        body { font-family: 'Segoe UI', sans-serif; background: #f5f5f5; }
        .navbar { background: #f05340; padding: 1rem 2rem; }
        .navbar a { color: white; text-decoration: none; margin-right: 1.5rem; font-weight: 500; }
        .navbar a:hover { text-decoration: underline; }
        .container { max-width: 900px; margin: 2rem auto; padding: 0 1rem; }
        .card { background: white; border-radius: 8px; padding: 2rem; margin-bottom: 1rem; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        .card h1 { color: #333; margin-bottom: 1rem; }
        .card h2 { color: #f05340; margin: 1rem 0 0.5rem; }
        .badge { display: inline-block; background: #f05340; color: white; padding: 0.25rem 0.75rem; border-radius: 20px; font-size: 0.85rem; margin: 0.25rem; }
        .badge-success { background: #28a745; }
        .badge-warning { background: #ffc107; color: #333; }
        .project { border-left: 4px solid #f05340; padding-left: 1rem; margin: 1rem 0; }
        ul { margin-left: 1.5rem; }
        li { margin: 0.5rem 0; }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="{{ route('profile.index') }}">Profile</a>
        <a href="{{ route('profile.about') }}">Tentang</a>
        <a href="{{ route('profile.portofolio') }}">Portofolio</a>
        <a href="{{ route('profile.contact') }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
