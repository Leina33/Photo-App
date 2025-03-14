<!-- resources/views/photos/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
</head>
<body>
    <h1>Photo List</h1>

    @if(isset($photos) && count($photos) > 0)
        <ul>
            @foreach($photos as $photo)
                <li>
                    <a href="{{ url('/photos/' . $photo['id']) }}">
                        <h3>{{ $photo['title'] }}</h3>
                    </a>
                    <img src="{{ $photo['thumbnailUrl'] }}" alt="Thumbnail" width="100">
                    <p>Photo ID: {{ $photo['id'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No photos available.</p>
    @endif
</body>
</html>
