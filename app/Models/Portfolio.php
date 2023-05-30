<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
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
