<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSliderRequest;
use App\Models\Slider;
use App\Services\UploadFileService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function __construct(protected UploadFileService $uploadFileService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $request->validated();

        Slider::create($request->safe()->except(['image_ar', 'image_en', 'top', 'right', 'left', 'bottom']) + [
            'image_ar' => $this->uploadFileService->store($request->image_ar, 'images/sliders'),
            'image_en' => $this->uploadFileService->store($request->image_en, 'images/sliders'),
            'styles' => $request->safe(['top', 'right', 'left', 'bottom'])
        ]);

        return redirect()->route('sliders.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSliderRequest $request, Slider $slider)
    {
        // return $request;
        $request->validated();

        $slider->update($request->safe()->except(['image_ar', 'image_en', 'top', 'right', 'left', 'bottom','top_ar', 'right_ar', 'left_ar', 'bottom_ar']) + [
            'image_ar' => $this->uploadFileService->update($request->image_ar, $slider->image_ar, 'images/sliders'),
            'image_en' => $this->uploadFileService->update($request->image_en, $slider->image_en, 'images/sliders'),
            'styles' => $request->safe(['top', 'right', 'left', 'bottom']),
            'styles_ar' => $request->safe(['top_ar', 'right_ar', 'left_ar', 'bottom_ar'])
        ]);

        return redirect()->route('sliders.edit',1)->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $this->uploadFileService->delete($slider->image);
        $slider->delete();

        return redirect()->route('sliders.index')->with('success', trans('message.delete'));
    }
}