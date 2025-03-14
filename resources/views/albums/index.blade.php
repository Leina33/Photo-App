<!-- resources/views/albums/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
</head>
<body>
    <h1>Album List</h1>

    @if(isset($albums) && count($albums) > 0)
        <ul>
            @foreach($albums as $album)
                <li>
                    <a href="{{ url('/albums/' . $album['id']) }}">
                        <h3>{{ $album['title'] }}</h3>
                    </a>
                    <p>Album ID: {{ $album['id'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No albums available.</p>
    @endif
</body>
</html>
