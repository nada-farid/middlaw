<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Testimonial extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    public $table = 'testimonials';

    protected $fillable = [
        'name',
        'postion',
        'title',
        'review',
        'created_at',
        'updated_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('image');

    }
}