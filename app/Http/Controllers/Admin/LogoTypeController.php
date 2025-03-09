<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LogoTypeRequest;
use App\Models\LogoType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LogoTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.logo-types.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logo-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LogoTypeRequest $request)
    {
        $request->validated();

        $logo = LogoType::create($request->safe()->except('attachments'));

        foreach($request->attachments ?? [] as $attachment) {
            $logo->addMedia($attachment)->toMediaCollection();
        }


        Cache::forget('logo-types');

        return redirect()->route('logo-types.index')->with('success', trans('message.create'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogoType $logoType)
    {
        $logoType->load('media');
        return view('admin.logo-types.edit', compact('logoType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LogoTypeRequest $request, LogoType $logoType)
    {
        $request->validated();

        $logoType->update($request->safe()->except('attachments'));

        foreach($request->attachments ?? [] as $attachment) {
            $logoType->addMedia($attachment)->toMediaCollection();
        }

        Cache::forget('logo-types');

        return redirect()->route('logo-types.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogoType $logoType)
    {
        $logoType->media()->delete();

        $logoType->delete();

        Cache::forget('logo-types');

        return redirect()->route('logo-types.index')->with('success', trans('message.delete'));
    }
}