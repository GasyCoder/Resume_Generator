<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['label', 'description', 'user_id'];

    /**
     * Get the user that owns the skill
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
