<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'content',
        'music_id'
    ];

    public function music(){
        return $this->belongsTo(Music::class);
    }
}
