<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slider = Slider::create([
            'title_1'=>'شركة مداد القانون للمحاماه والإستشارات القانونية',
            'title_2'=>'نقدم خدمات قانونية متكاملة',
            'title_3' => 'وفق الأنظمة المعمول بها في المملكة العربية السعودية.',
            'button_text'=>'خدماتنا',
            'button_url'=> route('frontend.services')
                
        ]);
        
        $sourcePath = public_path('frontend/assets/images/home-slider/slide-5.jpg');
        if(file_exists($sourcePath)){
            $destinationPath = public_path('frontend/assets/images/home-slider/slide-5-temp.jpg');
            copy($sourcePath, $destinationPath);
        } 
        if(file_exists($sourcePath) && file_exists($destinationPath)){
            $slider->addMedia($destinationPath)->toMediaCollection('slider_image');
        }

        $slider = Slider::create([
            'title_1'=>'نلتزم بالدقة والسرية التامة في جميع القضايا والاستشارات.',
            'title_2'=>'فريق من  المستشارين  الخبرة في مختلف المجالات القانونية.',
            'title_3' => 'نواكب التطورات التشريعية لضمان حلول قانونية فعّالة.',
            'button_text'=>'عن مداد',
            'button_url'=> route('frontend.about'),
                
        ]);
        
        $sourcePath = public_path('frontend/assets/images/home-slider/slide-4.jpg');
        if(file_exists($sourcePath)){
            $destinationPath = public_path('frontend/assets/images/home-slider/slide-4-temp.jpg');
            copy($sourcePath, $destinationPath);
        } 
        if(file_exists($sourcePath) && file_exists($destinationPath)){
            $slider->addMedia($destinationPath)->toMediaCollection('slider_image');
        }

        $slider = Slider::create([
            'title_2'=>'نؤمن أن الثقة هي أساس العلاقة بين المحامي وموكله.',
            'title_3' => 'معكم خطوة بخطوة حتى الوصول إلى الحل القانوني الأمثل.',
            'button_text'=>'خدماتنا',
            'button_url'=> route('frontend.services')
                
        ]);
        
        $sourcePath = public_path('frontend/assets/images/home-slider/slide-3.jpg');
        if(file_exists($sourcePath)){
            $destinationPath = public_path('frontend/assets/images/home-slider/slide-3-temp.jpg');
            copy($sourcePath, $destinationPath);
        } 
        if(file_exists($sourcePath) && file_exists($destinationPath)){
            $slider->addMedia($destinationPath)->toMediaCollection('slider_image');
        }
    }
}