<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{



    public function kard()
    {
        return $this->belongsTo(Kards::class);
    }



}
