<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Alert;

class ServicesController extends Controller
{
    //
    public function index(){
        $services = Service::orderBy('id', 'asc')->paginate(8);
        
        return view('frontend.services', compact('services'));
    }

    public function show($slug){
        $service = Service::where('slug', $slug)
            ->with(['media'])
            ->firstOrFail();
        $recentServices = Service::with(['media'])->where('id', '!=', $service->id)->orderBy('id', 'desc')->take(4)->get();
        return view('frontend.service-details', compact('service', 'recentServices'));
    }
}
