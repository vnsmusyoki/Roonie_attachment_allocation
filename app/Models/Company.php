<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table='companies';

    protected $fillable =[
        'logo','cover','company_name','company_email','phone',
        'website_name','team_size','category','country','city',
        'logitude','latitude','about_company','facebook_link',
        'twitter_link','address','user_id'
    ];
    public function job(){
       return $this->hasMany(Job::class);
    }
}
