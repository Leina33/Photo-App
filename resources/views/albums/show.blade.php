<!-- resources/views/albums/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Details</title>
</head>
<body>
    <h1>Album Details</h1>

    <h2>Album: {{ $album['title'] }}</h2>
    <h3>User Details:</h3>

    <ul>
        <li><strong>ID:</strong> {{ $user['id'] }}</li>
        <li><strong>Name:</strong> {{ $user['name'] }}</li>
        <li><strong>Username:</strong> {{ $user['username'] }}</li>
        <li><strong>Email:</strong> {{ $user['email'] }}</li>
        <li><strong>Phone:</strong> {{ $user['phone'] }}</li>
        <li><strong>Website:</strong> {{ $user['website'] }}</li>
        <li><strong>Address:</strong> {{ $user['address']['street'] }}, {{ $user['address']['suite'] }}, {{ $user['address']['city'] }}, {{ $user['address']['zipcode'] }}</li>
        <li><strong>Company:</strong> {{ $user['company']['name'] }}</li>
    </ul>

    <a href="{{ url('/albums') }}">Back to Albums</a>
</body>
</html>
