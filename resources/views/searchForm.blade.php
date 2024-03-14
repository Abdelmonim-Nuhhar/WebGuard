<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('customer.search') }}">
@csrf 
    <label for="id">User ID:</label>
    <input type="text" name="id" id="id">
    <input type="submit" value="Search">
</form>

@if($results)
    @foreach($results as $row)
        <pre>ID: {{ $row->id }}<br />
            First name: {{ $row->first_name }}<br />
            Last name: {{ $row->last_name }}<br />
            Username: {{ $row->username }}<br />
            Username: {{ $row->password }}<br />
            Email: {{ $row->email }}<br />
            Created at: {{ $row->created_at ?? 'N/A' }}<br /> <!-- Handle NULL value -->
            Updated at: {{ $row->updated_at ?? 'N/A' }}<br /> <!-- Handle NULL value -->
        </pre>
    @endforeach
@else
    <p>No results found.</p>
@endif

</body>
</html>
