<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Consulting;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConsultingFactory extends Factory
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
            'question' => 'هل يمكن الحصول على استشارة قانونية أونلاين؟',
            'answer' => 'بالتأكيد، يوفر المكتب خدمة الاستشارات القانونية عبر الهاتف أو الوسائل الإلكترونية، بما يضمن سرعة التواصل وسهولة الوصول للخدمة أينما كنت.',
        ];
    }
}
