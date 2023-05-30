<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getPrice()
    {
        return $this->price . " " . "ريال";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function firstMedia()
    {
        return $this->morphOne(Media::class, 'mediable')->orderBy('file_sort', 'asc');
    }

    public function media()
    {
        return $this->MorphMany(Media::class, 'mediable');
    }
}
