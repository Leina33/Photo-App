<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AlbumController extends Controller
{
    public function index(): View
    {
        // Make the API request to get albums
        $response = Http::get('https://jsonplaceholder.typicode.com/albums');

        // Check if the response is successful
        if ($response->successful()) {
            $albums = $response->json();  // Get albums data as an array
            return view('albums.index', compact('albums'));  // Pass albums to the view
        } else {
            // If there's an error with the API request, display an error message
            return view('albums.index')->with('error', 'Failed to retrieve albums');
        }
    }
}
