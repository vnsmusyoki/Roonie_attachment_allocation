<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title', 'slots_needed', 'job_description', 'job_category', 'qualification', 'course', 'gender', 'company_user_id', 'attachment_status', 'additional_information', 'appreciation_token',
    ];

    public function companymanagement()
    {
        return $this->belongsTo(User::class, 'company_user_id', 'id');
    }
}
