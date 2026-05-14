<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DynamicContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'logoimage',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'phone_number',
        'operating_hours',
        'companyname',
        'copyrightyear',
        'description',
        'email',
        'address',
        'favicon',
        'flyer_tagline',
        'flyer_title',
        'flyer_description',
        'flyer_image',
        'flyer_pdf',
    ];
}
