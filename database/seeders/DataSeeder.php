<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Client;
use App\Models\News;
use App\Models\Consulting;
use App\Models\Testimonial;
use App\Models\Partner;

class DataSeeder extends Seeder
{
    public function run()
    {
        Service::factory(6)->withMedia()->create();
        Client::factory(6)->withMedia()->create();
        News::factory(9)->withMedia()->create();
        Consulting::factory(4)->create();
        Testimonial::factory(4)->withMedia()->create();
        Partner::factory(6)->withMedia()->create();
    }
}