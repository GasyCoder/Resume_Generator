<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['company', 'jobtitle', 'jobdescription', 'begin', 'end', 'working', 'user_id'];

    /**
     * Get the user that owns the experience
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
