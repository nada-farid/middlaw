<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Service extends Model implements HasMedia
{
    use InteractsWithMedia , HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'content',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('service_icon')
            ->singleFile();
            $this->addMediaCollection('service_image')
            ->singleFile();
    }

    public function getServiceImageAttribute(): ?string
    {
        return $this->getFirstMediaUrl('service_image');
    }
    public function getServiceIconAttribute(): ?string
    {
        return $this->getFirstMediaUrl('service_icon');
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->name);
    }

}
