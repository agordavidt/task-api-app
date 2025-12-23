<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {

      $posts = Post::all();
    //     $posts = [
    //         [
    //         'user' => 'DJ Niaja',
    //         'username' => '@djniaja',
    //         'platform' => 'Spotify',
    //         'content' => 'New Afrobeat mix just dropped! 🔥🎶 Go stream and vibe.',
    //         'created_at' => '2025-02-10 14:30:00'
    //     ],
    //     [
    //         'user' => 'Djknas Lion Blue',
    //         'username' => '@djknas',
    //         'platform' => 'Youtube Music',
    //         'content' => 'Best of 2face Idibia',
    //         'created_at' => '2025-11-09 19:16:00'
    //     ],
    //     [
    //         'user' => 'Exclusive',
    //         'username' => '@djniaja',
    //         'platform' => 'Spotify',
    //         'content' => 'Naija Throwback bangers jaming! 🔥🎶 ',
    //         'created_at' => '2025-02-12 04:18:00'
    //     ],
    
    
    // ];

        return view('home', ['posts' => $posts]);
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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
