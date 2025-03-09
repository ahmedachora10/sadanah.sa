<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CorporateIdentityRequest;
use App\Models\CorporateIdentity;
use Illuminate\Support\Facades\Cache;

class CorporateIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.corporate-identities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.corporate-identities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CorporateIdentityRequest $request)
    {
        CorporateIdentity::create($request->validated());

        Cache::forget('corporate-identities');

        return redirect()->route('corporate-identities.index')->with('success', trans('message.create'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorporateIdentity $corporateIdentity)
    {
        return view('admin.corporate-identities.edit', compact('corporateIdentity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CorporateIdentityRequest $request, CorporateIdentity $corporateIdentity)
    {
        $corporateIdentity->update($request->validated());

        Cache::forget('corporate-identities');

        return redirect()->route('corporate-identities.index')->with('success', trans('message.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorporateIdentity $corporateIdentity)
    {
        $corporateIdentity->delete();

        Cache::forget('corporate-identities');

        return redirect()->route('corporate-identities.index')->with('success', trans('message.delete'));
    }
}
