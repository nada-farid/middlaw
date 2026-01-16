<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Client;
use App\Models\News;

class DataSeeder extends Seeder
{
    public function run()
    {
        Service::factory(6)->withMedia()->create();
        Client::factory(6)->withMedia()->create();
        News::factory(9)->withMedia()->create();
    }
}