<?php

namespace App\Models;

//use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'source' => 'name'
//            ]
//        ];
//    }

    public function parent()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
