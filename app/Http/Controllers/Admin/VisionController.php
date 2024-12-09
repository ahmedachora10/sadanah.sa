<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVisionRequest;
use App\Models\Vision;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class VisionController extends Controller
{

    public function __construct(protected UploadFileService $uploadFileService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.visions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisionRequest $request)
    {
        $request->validated();

        Vision::create($request->safe()->except('image') + ['image' => $this->uploadFileService->store($request->image, 'images/visions')]);

        return redirect()->route('visions.index')->with('success', trans('message.update'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vision $vision)
    {
        return view('admin.visions.edit', compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreVisionRequest $request, Vision $vision)
    {
        $request->validated();

        $vision->update($request->safe()->except('image') + ['image' => $this->uploadFileService->update($request->image, $vision->image, 'images/visions')]);

        return redirect()->route('visions.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vision $vision)
    {
        $this->uploadFileService->delete($vision->image);
        $vision->delete();

        return redirect()->route('visions.index')->with('success', trans('message.delete'));
    }
}
