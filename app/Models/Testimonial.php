<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'name',
        'title',
        'content',
        'image_url',
        'rating',
        'status',
    ];
}