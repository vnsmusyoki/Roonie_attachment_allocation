<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable = [
        'job_title', 'job_description', 'job_category',
        'salary','gender','industry', 'qualification',
        'date','city','address','status'
    ];
}
