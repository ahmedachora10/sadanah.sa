<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreStatisticRequest;
use App\Models\Statistic;
use App\Services\UploadFileService;

class StatisticController extends Controller
{
    // public function __construct(protected UploadFileService $uploadFileService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.statistics.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticRequest $request)
    {
        //  + ['image' => $this->uploadFileService->store($request->image, 'images/statistics')]
        Statistic::create($request->validated());
        return redirect()->route('statistics.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistic $statistic)
    {
        return view('admin.statistics.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStatisticRequest $request, Statistic $statistic)
    {
        $request->validated();

        // safe()->except('image') + ['image' => $this->uploadFileService->update($request->image, $statistic->image, 'images/statistics')]
        $statistic->update($request->validated());

        return redirect()->route('statistics.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $statistic)
    {
        $statistic->delete();

        return redirect()->route('statistics.index')->with('success', trans('message.delete'));
    }
}