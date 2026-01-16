<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'site_name',
        'email',
        'phone',
        'address',
        'description',
        'about_us',
        'footer_text',
        'contact_us',
        'letters_text',
        'vision',
        'mission',
        'values',
        'goals',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'tiktok',
        'whatsapp',
        'telegram',
        'snapchat',
        'google_map',
        'created_at',
        'updated_at',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo')
            ->singleFile();
        $this->addMediaCollection('background_image')
            ->singleFile();
        $this->addMediaCollection('about_us')
            ->singleFile();

    }

    public function getLogoAttribute(): ?string
    {
        return $this->getFirstMediaUrl('logo');
    }
    public function getBackgroundImageAttribute(): ?string
    {
        return $this->getFirstMediaUrl('background_image');
    }
    public function getAboutUsAttribute(): ?string
    {
        return $this->getFirstMediaUrl('about_us');
    }
}
