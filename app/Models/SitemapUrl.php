<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SitemapUrl extends Model
{
    protected $fillable = [
        'url',
        'lastmod',
        'changefreq',
        'priority',
        'is_active',
        'source',
    ];
}
