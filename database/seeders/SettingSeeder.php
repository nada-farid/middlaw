<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $setting = Setting::create([
            'site_name' => 'شركة مداد القانون للمحاماه والإستشارات القانونية ',
            'email' => 'midadlaw.com',
            'phone' => '+1 234 567 8899',
            'address' => 'العاصمة الرياضية, الرياض, المملكة العربية السعودية',
            'description' => 'يُعد موقع مداد القانون للمحاماة والاستشارات القانونية منصة قانونية متخصصة تهدف إلى تقديم خدمات قانونية متكاملة باحترافية عالية ومعايير مهنية دقيقة. يضم الموقع نخبة من المحامين والمستشارين القانونيين ذوي الخبرة في مختلف فروع القانون، مع التركيز على تقديم حلول قانونية عملية تحمي حقوق العملاء وتلبي احتياجاتهم بكفاءة وشفافية. يسعى مداد القانون إلى أن يكون مرجعًا موثوقًا للأفراد والشركات، من خلال تقديم الاستشارات القانونية، وصياغة العقود، والتمثيل القانوني أمام الجهات القضائية، مع الالتزام الكامل بأخلاقيات المهنة وسرية المعلومات.',
            'about_us' => ' يُعد مكتب مداد القانون للمحاماة والاستشارات القانونية من المكاتب القانونية المتخصصة التي تقدم خدمات قانونية متكاملة للأفراد والشركات، اعتمادًا على خبرة عملية ومعرفة قانونية دقيقة بمختلف فروع القانون. يلتزم المكتب بتقديم حلول قانونية فعّالة تحمي حقوق العملاء وتحقق أفضل النتائج، مع الالتزام التام بأخلاقيات المهنة، الدقة، والسرية التامة في التعامل. يسعى مداد القانون إلى بناء شراكات طويلة الأمد مع عملائه، من خلال تقديم استشارات قانونية موثوقة وتمثيل قانوني احترافي قائم على الفهم العميق لاحتياجات كل حالة.

منصة قانونية متخصصة تهدف إلى تقديم خدمات قانونية متكاملة باحترافية عالية ومعايير مهنية دقيقة. يضم الموقع نخبة من المحامين والمستشارين القانونيين ذوي الخبرة في مختلف فروع القانون، مع التركيز على تقديم حلول قانونية عملية تحمي حقوق العملاء وتلبي احتياجاتهم بكفاءة وشفافية. والتمثيل القانوني أمام الجهات القضائية، ',
            'footer_text' => 'شركة مداد القانون للمحاماه والإستشارات القانونية',
            'vision'=>'نقدّم خدمات قانونية متكاملة للشركات والأفراد، تقوم على الفهم العميق للاحتياجات القانونية، وتقديم حلول عملية وفعّالة تحمي الحقوق، وتدعم الاستقرار، وتسهم في اتخاذ قرارات قانونية واثقة.',
            'mission'=>'نهدف إلى إعطاء العملاء خدمات قانونية متكاملة وفعالة، تعزز حقوقهم وتحميهم من المخاطر القانونية، وتسهم في بناء علاقات طويلة الأمد مع عملائنا، من خلال التعامل المهني والموثوق به، والالتزام بالقواعد القانونية والأخلاقيات المهنية.',
            'values'=>'الثقة: نبني علاقات طويلة الأمد مع عملائنا.
الوضوح: نؤمن أن القانون يجب أن يكون مفهومًا وسهلًا.
الاحتراف: جودة عالية في الأداء والنتائج.
المرونة: حلول تناسب اختلاف احتياجات الشركات والأفراد.
الالتزام: متابعة دقيقة ومسؤولة لكل قضية أو ملف.
السرية: حماية معلومات العملاء دون استثناء.
التطوير المستمر: مواكبة الأنظمة والتغيرات القانونية.',
            'facebook'=>'https://www.facebook.com/midadlaw',
            'twitter'=>'https://www.twitter.com/midadlaw',
            'linkedin'=>'https://www.linkedin.com/midadlaw',
            'instagram'=>'https://www.instagram.com/midadlaw',
            'youtube'=>'https://www.youtube.com/midadlaw',
            'tiktok'=>'https://www.tiktok.com/midadlaw',
            'footer_text'=>'شركة مداد القانون للمحاماه والإستشارات القانونية',
            'counter_1_title'=>'سنوات الخبرة',
            'counter_1_value'=>'+5',
            'counter_2_title'=>'قضية ناجحة',
            'counter_2_value'=>'1425',
            'counter_3_title'=>'عميل راضي',
            'counter_3_value'=>'99%',
            'counter_4_title'=>'مستشارون ومحاميون',
            'counter_4_value'=>'+60',

        ]);
    
    $sourcePath = public_path('frontend/assets/images/logo.png');
    if(file_exists($sourcePath)){
        $destinationPath = public_path('frontend/assets/images/logo-temp.png');
        copy($sourcePath, $destinationPath);
    } 
    if(file_exists($sourcePath) && file_exists($destinationPath)){
        $setting->addMedia($destinationPath)->toMediaCollection('logo');
    }
    $sourcePath = public_path('frontend/assets/images/bread.jpg');
    if(file_exists($sourcePath)){
        $destinationPath = public_path('frontend/assets/images/bread-temp.jpg');
        copy($sourcePath, $destinationPath);
    } 
    if(file_exists($sourcePath) && file_exists($destinationPath)){
        $setting->addMedia($destinationPath)->toMediaCollection('background_image');
    }
    $sourcePath = public_path('frontend/assets/images/about01.jpg');
    if(file_exists($sourcePath)){
        $destinationPath = public_path('frontend/assets/images/about01-temp.jpg');
        copy($sourcePath, $destinationPath);
    } 
    if(file_exists($sourcePath) && file_exists($destinationPath)){
        $setting->addMedia($destinationPath)->toMediaCollection('about_us_image');
    }

}

}