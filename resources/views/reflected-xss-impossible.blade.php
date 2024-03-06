<!-- reflected-xss-impossible.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS Vulnerability - Impossible Level</title>
</head>
<body>
    <h1>Reflected XSS Vulnerability - Impossible Level</h1>

    <form method="GET" action="{{ route('xss.impossible') }}">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <!-- Include Anti-CSRF token -->
        <input type="hidden" name="user_token" value="{{ csrf_token() }}">
        <button type="submit">Submit</button>
    </form>

    @isset($name)
        <h2>Hello, {!! $name !!}!</h2>
    @endisset
</body>
</html>
