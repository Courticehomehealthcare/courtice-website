<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'candidateresumes';

    protected $fillable = [
        'job_posting_id',
        'candidateName',
        'candidatelastName',
        'candidateemail',
        'candidatephoneno',
        'appliedforposition',
        'Message',
        'resume',
        'applieddate',
        'email_sent',
    ];

    public function jobPosting()
    {
        return $this->belongsTo(JobPosting::class, 'job_posting_id');
    }
}
