<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];
public function setSlugAttribute($value)
{
    $this->attributes['slug'] = Str::slug($value);
}
}