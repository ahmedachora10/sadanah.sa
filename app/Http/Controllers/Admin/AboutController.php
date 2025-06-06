<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // public function __construct(protected UploadFileService $uploadFileService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutU = About::firstOrCreate([]);
        // $images = $aboutU->media;
        return view('admin.about-us.index', compact('aboutU'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about-us.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        $newWork = About::create($request->validated());

        // foreach($request->images as $img) {
        //     $newWork->addMedia($img)->toMediaCollection();
        // }

        return redirect()->route('about-us.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(About $aboutU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $aboutU)
    {
        // $images = $aboutU->media;

        return view('admin.about-us.edit', compact('aboutU'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAboutRequest $request, About $aboutU)
    {
        $aboutU->update($request->validated());

        // if(count($request->images) > 0) {
        //     $aboutU->media()->delete();
        // }

        // foreach($request->images ?? [] as $img) {
        //     $aboutU->addMedia($img)->toMediaCollection();
        // }


        return redirect()->route('about-us.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $aboutU)
    {
        $aboutU->delete();

        return redirect()->route('about-us.index')->with('success', trans('message.delete'));
    }
}