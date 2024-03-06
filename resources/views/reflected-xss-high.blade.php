<!-- reflected-xss-high.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS Vulnerability - High Level</title>
</head>
<body>
    <h1>Reflected XSS Vulnerability - High Level</h1>

    <form method="GET" action="{{ route('xss.high') }}">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>

    @if($name)
        <h2>Hello, {!! $name !!}!</h2>
    @endif
</body>
</html>
