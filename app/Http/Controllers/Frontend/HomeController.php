<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Method;
use Illuminate\Support\Facades\Artisan;
use App\Models\Program;
use App\Models\News;
use App\Models\Goal;
use App\Models\Team;
use App\Models\Partner;
use App\Models\Award;
use App\Models\Job;
use App\Models\Client;
use App\Models\Employment;
use App\Models\DynamicSettingField;
use App\Models\Consulting;
use App\Models\Testimonial;
use App\Http\Requests\StoreEmploymentFrontendRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class HomeController extends Controller
{
    //
    public function index(){
        $setting = Setting::first();
        $sliders = Slider::with(['media'])->orderBy('id', 'asc')->get();
        $news = News::with(['media'])->orderBy('id', 'desc')->take(3)->get();
        $services = Service::get()->take(6);
        $clients = Client::all();
        $consultings = Consulting::orderBy('id', 'desc')->take(4)->get();
        $testimonials = Testimonial::with(['media'])->orderBy('id', 'desc')->get();
        return view('frontend.index', compact('setting', 'sliders', 'news','services','clients','consultings','testimonials'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function partners(){
        $partners = Partner::with(['media'])->orderBy('id', 'asc')->get();
        return view('frontend.partners', compact('partners'));
    }

    public function employment(){
        return view('frontend.employment');
    }

    public function storeEmployment(StoreEmploymentFrontendRequest $request){
        $employment = Employment::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'position' => $request->position,
            'experience' => $request->experience,
        ]);

        if ($request->hasFile('resume')) {
            $employment->addMediaFromRequest('resume')->toMediaCollection('resume');
        }

        Alert::success('تم بنجاح', 'تم إرسال طلب التوظيف بنجاح، سنتواصل معك قريباً');

        return redirect()->back();
    }


    public function run(){
        Artisan::call('storage:link');
        Artisan::call('migrate:fresh');
        Artisan::call('db:seed');
        Artisan::call('optimize:clear');

        
        
    }

}
