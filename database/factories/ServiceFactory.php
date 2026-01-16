<?php

namespace Database\Factories;
use App\Models\Service;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
             'name'=>'الاستشارات القانونية',
             'description'=>'نوفّر استشارات قانونية دقيقة ومتكاملة لمساعدة عملائنا على اتخاذ القرارات الصحيحة وتفادي المخاطر القانونية، وتشمل: الاستشارات القانونية العامة. الاستشارات التجارية والاستثمارية. الاستشارات العمالية. الاستشارات العقارية.',
             'content'=>'إعادة الهيكلة هو نوع من العمل للشركات التي تلجأ اليه عند حدوث تعديل كبير في الديون، والعمليات أو هيكل شركة كوسيلة لتقليل او تلاشي الاضرار المالية وتحسين الأعمال.

عندما كانت الشركة تواجه صعوبة في تسديد الدفعات عن سداد ديونها، فإنه غالبا ما تلجأ الي اعادة ضبط شروط الديون في إعادة هيكلة الديون، وخلق وسيلة لسداد حاملي السندات. او عن طريق إعادة هيكلة عملياتها أو هيكلها المالي عن طريق خفض التكاليف، مثل الرواتب، أو تخفيض حجمها من خلال بيع الأصول.

أوضحت المادة (18) من قانون تنظيم إعادة الهيكلة والصلح الواقي والإفلاس رقم 11 لسنة 2018 ان هدف إعادة الهيكلة وضع خطة لإعادة تنظيم أعمال التاجر المالية والإدارية تتضمن كيفية خروجه من مرحلة الاضطراب المالي والإداري وسداد ديونه مع بيان مصادر التمويل المقترحة.

نصت المادة (15) من قانون رقم 11 لسنة 2018 بشأن اصدار قانون تنظيم إعادة الهيكلة والصلح الواقي للإفلاس على انه” لكل تاجر لا يقل رأسماله عن مليون جنيه وزاول التجارة بصفة مستمرة خلال السنتين السابقتين على تقديم الطلب ولم يرتكب غشاً ان يطلب إعادة الهيكلة.

ما هي لجنة إعادة الهيكلة و تخصصاتها؟

ستدير عملية إعادة الهيكلة لجنة مشكلة من الخبراء المدرجين في جدول خبراء الإفلاس في المحاكم الاقتصادية.

تقوم لجنة إعادة الهيكلة بإعداد تقرير للقاضي المختص خلال 3 أشهر برأيها في أسباب الاضطراب المالي والإداري للشركة وفعالية الدخول في إعادة الهيكلة والخطة المقترحة. في جميع الأحوال يجب ألا يستغرق تنفيذ الخطة أكثر من 5 سنوات.'
        ];
    }

    public function withMedia(): Factory
    {
        return $this->afterCreating(function (Service $service) {
    
            $sourcePath = public_path("frontend/assets/images/servise_single.jpg");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/servise_single-temp.jpg");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $service->addMedia($destinationPath)->toMediaCollection('service_image');
            }
        });
    }
}
