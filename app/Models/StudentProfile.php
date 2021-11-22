<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;
    public function studentprofileuser()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'student_id', 'school', 'course', 'year_of_study', 'picture'
    ];
}
