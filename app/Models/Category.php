<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriename',
        'slug',
        'description',
        'image',
        'status',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'seo_image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
