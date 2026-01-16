<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class News extends Model implements HasMedia
{
    use InteractsWithMedia , HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'address',
        'is_active',
        'sort_order',
    ];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('photo')
            ->singleFile();
        $this->addMediaCollection('inside_image')
            ->singleFile();
    }


    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('photo');
    }

    public function getInsideImageAttribute()
    {
        return $this->getFirstMediaUrl('inside_image');
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->title);
    }
}
