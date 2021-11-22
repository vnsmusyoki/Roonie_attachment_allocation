<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
        'job_title', 'company_id','slots_needed', 'job_description', 'job_category', 'qualification',
        'course', 'gender', 'attachment_status', 'additional_information', 'appreciation_token',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
