<?php

namespace App\Http\Controllers;

use App\Http\Resources\blogResource;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
//        $posts = Post::query()
//            ->where('active', true)
//            ->whereDate('publish_at', '<', Carbon::now())
//            ->orderBy('publish_at', 'desc')
//            ->paginate(5);
//
//        return view('home',['posts' => $posts]);
        return view('livewire.layouts.master');
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

    public function getBlogPosts()
    {
        $posts = Post::query()->select('id','title', 'thumbnail')->get();
        return  blogResource::collection($posts);
    }
}
