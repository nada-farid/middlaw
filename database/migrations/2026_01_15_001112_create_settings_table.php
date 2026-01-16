<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->longText('about_us')->nullable();
            $table->longText('footer_text')->nullable();
            $table->longText('contact_us')->nullable();
            $table->longText('letters_text')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('values')->nullable();
            $table->longText('goals')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('google_map')->nullable();
            $table->string('counter_1_title')->nullable();
            $table->string('counter_1_value')->nullable(0);
            $table->string('counter_2_title')->nullable();
            $table->string('counter_2_value')->nullable(0);
            $table->string('counter_3_title')->nullable();
            $table->string('counter_3_value')->nullable(0);
            $table->string('counter_4_title')->nullable();
            $table->string('counter_4_value')->nullable(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
