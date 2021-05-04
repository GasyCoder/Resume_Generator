<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['school', 'degree', 'begin', 'end', 'graduated', 'user_id'];

    /**
     * Get the user that owns the education
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
