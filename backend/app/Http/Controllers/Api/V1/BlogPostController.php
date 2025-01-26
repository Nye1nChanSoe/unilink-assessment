<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogPostResource;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BlogPostResource::collection(BlogPost::with(['author', 'tags'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validated();
        $blogPost = BlogPost::create($validatedData);
        return new BlogPostResource($blogPost);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new BlogPostResource(BlogPost::with(['author', 'tags'])->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogPost = BlogPost::findOrFail($id);

        $validatedData = $request->validated();
        $blogPost->update($validatedData);
        return new BlogPostResource($blogPost);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogPost = BlogPost::findOrFail($id);
        $blogPost->delete();

        return response()->noContent();
    }
}
