<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AlbumController extends Controller
{
    public function index(): View
    {
        // Fetch albums
        $response = Http::get('https://jsonplaceholder.typicode.com/albums');
        $albums = $response->json();

        return view('albums.index', compact('albums'));
    }

    // Show user details when an album is clicked
    public function show($albumId): View
    {
        // Fetch the album details
        $albumResponse = Http::get("https://jsonplaceholder.typicode.com/albums/{$albumId}");
        $album = $albumResponse->json();

        // Fetch the user associated with the album
        $userResponse = Http::get("https://jsonplaceholder.typicode.com/users/{$album['userId']}");
        $user = $userResponse->json();

        return view('albums.show', compact('album', 'user'));
    }
}
