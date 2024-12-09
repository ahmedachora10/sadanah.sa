<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCertificateRequest;
use App\Http\Requests\Admin\StoreWhyUsRequest;
use App\Models\Certificate;
use App\Models\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WhyUsController extends Controller
{
    public function index() {

        $whyU = WhyUs::first();
        $certificates = Certificate::all();

        return view('admin.why-us.index', compact('whyU', 'certificates'));
    }

    public function update(Request $request) {
        $whyU = WhyUs::first();
        $whyU->properties_ar = $request->properties_ar;
        $whyU->properties_en = $request->properties_en;
        $whyU->save();

        return redirect()->route('why-us.index')->with('success', trans('message.update'));
    }

    public function add_certificate(Request $request)
    {
        $certificate = new Certificate();
        $certificate->title_en = $request->title_en;
        $certificate->title_ar = $request->title_ar;
        $certificate->save();
        return redirect()->back();
    }

    public function update_certificate(Request $request)
    {
        $certificate = Certificate::where('id',$request->id)->first();
        $certificate->title_en = $request->title_en;
        $certificate->title_ar = $request->title_ar;
        $certificate->save();
        return redirect()->back();
    }

    public function delete_certificate(Request $request)
    {
        $certificate = Certificate::where('id',$request->id)->first();
        $certificate->delete();
        return redirect()->back();
    }
}