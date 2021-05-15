<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}