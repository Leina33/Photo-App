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
    
    <!-- Display error if there's any -->
    @if(session('error'))
        <div style="color: red;">
            <p>{{ session('error') }}</p>
        </div>
    @endif
    
    <!-- If albums data is available -->
    @if(isset($albums) && count($albums) > 0)
        <ul>
            @foreach($albums as $album)
                <li>
                    <h3>{{ $album['title'] }}</h3>
                    <p>Album ID: {{ $album['id'] }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <!-- If no albums data available -->
        <p>No albums available.</p>
    @endif
</body>
</html>
