<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Kards extends Model
{
    protected $fillable =['fullname','birth_date','job', 'email','about', 'profile', 'skills', 'aducationame',
        'year','metaname','meta', 'portfolio'];


    public function projects()
    {
        return $this->hasMany('App\project', 'kard_id');
    }
}


