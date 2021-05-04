<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sex', 'firstname', 'lastname', 'email', 'password', 
        'birthday', 'phone', 'address', 'city', 'country', 'postalcode'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Get all experiences of the user
    */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get all educations of the user
    */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

     /**
     * Get all skills of the user
    */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get all interests of the user
    */
    public function interests()
    {
        return $this->hasMany(Interest::class);
    }
    

    public function addExperiences($exp)
    {
        $this->experiences()->create($exp);
    }

    public function addEducations($educations)
    {
        $this->educations()->create($educations);
    }

    public function addSkills($skills)
    {
        $this->skills()->create($skills);
    }

    public function addInterests($interests)
    {
        $this->interests()->create($interests);
    }

    public function getAllUserInfos()
    {
        
    }
}
