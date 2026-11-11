<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | @yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> | 
        <a href="{{ route('projects') }}">My Projects</a> 
      
    </nav>

    <hr>

    <main>
        @yield('content') <!-- Child views will be injected here -->
    </main>

    <hr>
    <footer>All rights reserved &copy; 2026</footer>
</body>
</html>