<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Hawkma;
use Illuminate\Http\Request;
use App\Models\HawkmaCategory;
use App\Models\Report;
use App\Models\ReportCategory;

class HawkmaController extends Controller
{
    public function policies(Request $request){

    $categories = HawkmaCategory::get();
    $policies = Hawkma::when($request->category, function ($q) use ($request) {
        $q->where('category_id', $request->category);
    })->paginate(8)->withQueryString();

    return view('frontend.policies', compact('policies', 'categories'));
    }
    public function reports(Request $request){
      
        $categories = ReportCategory::get();
        $reports = Report::when($request->category, function ($q) use ($request) {
            $q->where('category_id', $request->category);
        })->paginate(8)->withQueryString();

        return view('frontend.reports', compact('reports', 'categories'));
    }
}