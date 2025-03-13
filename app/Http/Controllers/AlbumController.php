<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AlbumController extends Controller
{
    public function index(): View
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/albums');
        $albums = $response->json();

        return view('albums.index', compact('albums'));
    }
}
