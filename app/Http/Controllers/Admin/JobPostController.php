<?php

namespace App\Http\Controllers\Admin;

use App\Enums\JobType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreJobPostRequest;
use App\Models\JobCity;
use App\Models\JobPost;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobCities = JobCity::all();
        $jobTypes = JobType::cases();
        return view('admin.jobs.create', compact('jobCities', 'jobTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobPostRequest $request)
    {
        JobPost::create($request->validated());
        return redirect()->route('jobs.index')->with('success', trans('message.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(JobPost $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $job)
    {
        $jobCities = JobCity::all();
        $jobTypes = JobType::cases();
        return view('admin.jobs.edit', compact('job', 'jobCities', 'jobTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreJobPostRequest $request, JobPost $job)
    {
        $job->update($request->validated());
        return redirect()->route('jobs.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPost $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')->with('success', trans('message.delete'));
    }
}