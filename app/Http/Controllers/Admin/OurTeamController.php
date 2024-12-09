<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreOurTeamRequest;
use App\Models\OurTeam;
use App\Services\UploadFileService;

class OurTeamController extends Controller
{
    public function __construct(protected UploadFileService $uploadFileService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.our_team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.our_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOurTeamRequest $request)
    {
        $request->validated();
        OurTeam::create($request->safe()->except('image') + ['image' => $this->uploadFileService->store($request->image, 'images/teams')]);

        return redirect()->route('our-team.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(OurTeam $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $team)
    {
        return view('admin.our_team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreOurTeamRequest $request, OurTeam $team)
    {
        $request->validated();

        $team->update($request->safe()->except('image') + ['image' => $this->uploadFileService->update($request->image, $team->image, 'images/teams')]);

        return redirect()->route('our-team.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $team)
    {
        $team->delete();

        return redirect()->route('our-team.index')->with('success', trans('message.delete'));
    }
}