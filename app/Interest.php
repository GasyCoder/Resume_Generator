<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = ['label', 'description', 'user_id'];

    /**
     * Get the user that owns the interest
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
