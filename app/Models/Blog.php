<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    public $table = 'blogs';

    protected $appends = [
        'photo',
        'inside_imag',
        'other_images',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'content',
        'by',
        'content_2',
        'conclusion',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('photo');
        }

    public function getInsideImagAttribute()
    {
        return $this->getFirstMediaUrl('inside_imag');
    }

    public function getOtherImagesAttribute()
    {
        return $this->getFirstMediaUrl('other_images');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}