<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table='applications';
    protected $fillable=['user_id','job_id','resume','attachment_letter','status'];

    public function jobs(){
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
    public function users(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
