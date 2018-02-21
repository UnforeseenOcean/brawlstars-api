<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $fillable = [
        'name', 'description'
    ];

    // has many brawlers
    public function brawlers()
    {
        return $this->hasMany(Brawler::class);
    }
}
