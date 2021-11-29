<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';
    protected $fillable = ['student_id', 'attachment_id', 'company_id', 'uploaded_cv', 'attachment_letter', 'application_status', 'student_description'];

    public function applicationstudent()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function applicationcompany()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    public function applicationjob()
    {
        return $this->belongsTo(Job::class, 'attachment_id', 'id');
    }
}
