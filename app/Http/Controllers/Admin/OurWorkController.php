<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOurWorkRequest;
use App\Models\OurWork;
use App\Models\Tag;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class OurWorkController extends Controller
{
    // public function __construct(protected UploadFileService $uploadFileService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.our-works.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.our-works.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurWorkRequest $request)
    {

        $request->validated();

        $newWork = OurWork::create($request->safe()->except(['thumb', 'bg_image', 'tags']));

        $newWork->tags()->sync($request->tags);

        $newWork->addMediaFromRequest('thumb')->toMediaCollection('works-thumb');
        $newWork->addMediaFromRequest('bg_image')->toMediaCollection('works-bg');

        return redirect()->route('our-works.show', $newWork)->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(OurWork $ourWork)
    {
        return view('admin.our-works.add-images', compact('ourWork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurWork $ourWork)
    {
        // $images = $ourWork->getMedia('works');
        $tags = Tag::all();

        return view('admin.our-works.edit', compact('ourWork', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOurWorkRequest $request, OurWork $ourWork)
    {

        $request->validated();

        $ourWork->update($request->safe()->except(['thumb', 'bg_image']));

        $ourWork->tags()->sync($request->tags);

        if($request->thumb !== null) {
            $ourWork->clearMediaCollection('works-thumb');
            $ourWork->addMediaFromRequest('thumb')->toMediaCollection('works-thumb');
        }

        if($request->bg_image !== null) {
            $ourWork->clearMediaCollection('works-bg');
            $ourWork->addMediaFromRequest('bg_image')->toMediaCollection('works-bg');
        }


        return redirect()->route('our-works.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurWork $ourWork)
    {
        $ourWork->clearMediaCollection('works');
        $ourWork->tags()->detach();
        $ourWork->delete();

        return redirect()->route('our-works.index')->with('success', trans('message.delete'));
    }

    public function uploadImages(Request $request, OurWork $work) {
        $request->validate(['image' => 'required|image'], $request->all());

        $work->addMediaFromRequest('image')->toMediaCollection('works')->onlyKeepLatest(300);

        return true;
    }

    public function removeMedia(Request $request) {
        return response()->json([$request->input('id'), 'test' => 'ykead']);
    }
}