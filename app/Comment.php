<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment_text', 'educator_id',
    ];

    puplic function educator()
    {
    	return $this->belongsTo('App\educator');
    }
}
