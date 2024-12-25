<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ALLPosts = [
            [
                'id' => 1,
                'title' => 'Post 1',
                'url' => 'https://www.facebook.com/zuck/posts/10102481312251091',
                'description' => 'Voici la première publication de test.'
            ],
            [
                'id' => 2,
                'title' => 'Post 2',
                'url' => 'https://www.facebook.com/zuck/posts/10102481312351091',
                'description' => 'Voici la deuxième publication de test.'
            ],
            [
                'id' => 3,
                'title' => 'Post 3',
                'url' => 'https://www.facebook.com/zuck/posts/10102481312451091',
                'description' => 'Voici la troisième publication de test.'
            ],
        
        ];
       return view('posts',['posts' =>  $ALLPosts]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
