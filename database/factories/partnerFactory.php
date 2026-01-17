<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Partner;
use Filament\Tables\Columns\ImageColumn;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class partnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {            //
            return [
                //
                 'name'=>'خبرة',
                 'link'=>'test',
        ];
    }

    public function withMedia(): Factory
    {
        return $this->afterCreating(function (Partner $partner) {
    
            $sourcePath = public_path("frontend/assets/images/awards/awards-1.png");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/awards/awards-1-temp.png");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $partner->addMedia($destinationPath)->toMediaCollection('image');
            }
        });
    }
}
