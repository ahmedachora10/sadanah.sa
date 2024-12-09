<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHeadlineRequest;
use App\Models\Headline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Headline::all();
        return view('admin.headlines.index', compact('sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHeadlineRequest $request, Headline $headline)
    {
        $headline->update($request->validated());

        return redirect()->route('headlines.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Headline $headline)
    {
        //
    }
}
