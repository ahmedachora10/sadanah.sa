<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreBlogRequest;
use App\Models\Blog;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(protected UploadFileService $uploadFileService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $request->validated();
        Blog::create($request->safe()->except('image') + ['image' => $this->uploadFileService->store($request->image, 'images/blogs')]);

        return redirect()->route('blogs.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBlogRequest $request, Blog $blog)
    {
        $request->validated();

        $blog->update($request->safe()->except('image') + ['image' => $this->uploadFileService->update($request->image, $blog->image, 'images/blogs')]);

        return redirect()->route('blogs.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog;
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', trans('message.delete'));
    }
}
