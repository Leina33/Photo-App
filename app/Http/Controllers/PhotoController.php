<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PhotoController extends Controller
{
    // List photos
    public function index(): View
    {
        // Fetch photos
        $response = Http::get('https://jsonplaceholder.typicode.com/photos');
        $photos = $response->json();

        return view('photos.index', compact('photos'));
    }

    // Show photo details when clicked
    public function show($photoId): View
    {
        // Fetch the photo details
        $photoResponse = Http::get("https://jsonplaceholder.typicode.com/photos/{$photoId}");
        $photo = $photoResponse->json();

        // Fetch the album details (since the photo is linked to an album)
        $albumResponse = Http::get("https://jsonplaceholder.typicode.com/albums/{$photo['albumId']}");
        $album = $albumResponse->json();

        return view('photos.show', compact('photo', 'album'));
    }
}
