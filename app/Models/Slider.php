<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title_1',
        'title_2',
        'title_3',
        'button_text',
        'button_url',
        'is_active',
        'sort_order',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('slider_image')
            ->singleFile();
    }

    public function getSliderImageAttribute(): ?string
    {
    return $this->getFirstMediaUrl('slider_image');
    }
}
