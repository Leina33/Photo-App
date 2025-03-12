<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $url = 'https://jsonplaceholder.typicode.com/users';
        $response = file_get_contents($url);
       
            // Decode the JSON response
        $data = json_decode($response, true);
        return view('users',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        // return $id;

        $url = 'https://jsonplaceholder.typicode.com/users/'.$id;
        $response = file_get_contents($url);

        //Get Album 
        $url_album_user  = 'https://jsonplaceholder.typicode.com/albums?userId='.$id;
        $response_album_user = file_get_contents($url_album_user);
       
            // Decode the JSON response
        $data = json_decode($response, true);
        $dataAlbum = json_decode( $response_album_user, true);

        //  return gettype($data);
        // return $dataAlbum;
       

        return view('show',compact('data','dataAlbum'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function showAlbumPhoto($id)
     {

        $url = 'https://jsonplaceholder.typicode.com/photos?albumId='.$id;
        $response = file_get_contents($url);

            // Decode the JSON response
        $data = json_decode($response, true);

        return view('photo',compact('data'));
     }
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Users $users)
    {
        //
    }
}
