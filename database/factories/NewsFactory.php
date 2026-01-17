<?php

namespace Database\Factories;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NewsFactory extends Factory
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
             'title'=>' حقوق الموظف في نظام العمل السعودي',
             'slug'=>Str::slug(' حقوق الموظف في نظام العمل السعودي'),
             'short_description'=>'يوضح المقال حقوق العامل في نظام العمل السعودي، مثل الأجور، ساعات العمل، الإجازات، مكافأة نهاية الخدمة، والحالات التي يحق فيها للموظف',
             'description'=>'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.

ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق. هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.'
        ];
    }

    public function withMedia(): Factory
    {
        return $this->afterCreating(function (News $new) {
            $imageNumber = $new->id;
            $sourcePath = public_path("frontend/assets/images/blog/blog-{$imageNumber}.jpg");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/blog/blog-{$imageNumber}-temp.jpg");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $new->addMedia($destinationPath)->toMediaCollection('photo');
            }
            $sourcePath = public_path("frontend/assets/images/news_single.jpg");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/news_single-temp.jpg");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $new->addMedia($destinationPath)->toMediaCollection('inside_image');
            }
        });
    }
}
