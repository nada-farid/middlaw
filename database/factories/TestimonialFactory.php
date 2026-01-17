<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Testimonial;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'name' => fake()->name(),
            'postion' => 'مدير عام ',
            'title' => 'عمل عظيم',
            'review' =>'حيث تضم المجموعة كوكبة من المحامين المرخصين والمستشارين المتخصصين ذوي الخبرة والكفاءة العالية ، من خلال خبرة ممتدة لأكثر من عشرة سنوات والتي ساهمت في تقديم حلول قانونية مبتكرة وفعالة لعملائها',
        ];
    }

    public function withMedia(): Factory
    {
        return $this->afterCreating(function (Testimonial $testimonial) {
            $sourcePath = public_path("frontend/assets/images/testimonial/client-1.jpg");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/testimonial/client-1-temp.jpg");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $testimonial->addMedia($destinationPath)->toMediaCollection('image');
            }
        });
    }
}
