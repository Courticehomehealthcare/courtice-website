<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
	public $primaryKey = 'id';
	 protected $table = 'blogs';
    protected $fillable = [
        'name',
        'category',
        'last_updated',
        'image1',
        'image2',
        'description',
        'blogurl',
        'shortdescription',
        'status',
        'writtenby',
        'visible',
        'seo_title','seo_description','seo_keywords','seo_image',
    'canonical_url','og_title','og_description','og_image',
    'twitter_title','twitter_description','twitter_image'
    ];

    protected $casts = [
        'last_updated' => 'datetime',
    ];

    // Additional methods if needed
}
