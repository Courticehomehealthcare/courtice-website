<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class ContactUs extends Model
{protected $primaryKey = 'contactid';

    use HasApiTokens, HasFactory, Notifiable;
	protected $table = 'contactus';
    protected $fillable = [
        'Firstname', 
        'Lastname',
        'Phoneno',
        'Emailaddress',
        'Location',
        'Message',
        'Qualification',
        'visastatus',
        'country',
        'whatsapp'
    ];
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'updated_at';
    protected $casts = [
        'Created_at' => 'datetime',
    ];
   
}
