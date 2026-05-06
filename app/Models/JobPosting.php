<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'job_type',
        'salary_range',
        'status',
    ];

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'job_posting_id');
    }
}
