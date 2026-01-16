<?php

namespace Database\Factories;
use App\Models\Client;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
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
        return $this->afterCreating(function (Client $client) {
            $imageNumber = $client->id + 1;
            $sourcePath = public_path("frontend/assets/images/client/logo-{$imageNumber}.png");
            if (file_exists($sourcePath)) {
                $destinationPath = public_path("frontend/assets/images/client/logo-temp-{$imageNumber}.png");
                copy($sourcePath, $destinationPath);
            }
            if (file_exists($sourcePath) && file_exists($destinationPath)) {
                $client->addMedia($destinationPath)->toMediaCollection('image');
            }
        });
    }
}
