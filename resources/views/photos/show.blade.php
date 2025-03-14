<!-- resources/views/photos/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Details</title>
</head>
<body>
    <h1>Photo Details</h1>

    <h2>Photo Title: {{ $photo['title'] }}</h2>
    <img src="{{ $photo['url'] }}" alt="Photo" width="300">
    
    <h3>Album Details:</h3>
    <ul>
        <li><strong>Album ID:</strong> {{ $album['id'] }}</li>
        <li><strong>Album Title:</strong> {{ $album['title'] }}</li>
    </ul>

    <a href="{{ url('/photos') }}">Back to Photos</a>
</body>
</html>
