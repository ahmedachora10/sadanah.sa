<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurWork;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function store(Request $request, OurWork $work) {
        $request->validate(['image' => 'required|image'], $request->all());

        return $request->image;
    }
}
