<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable=[
        'title',
        'des',
        'sh',
        'ex_info',
        'period'

    ];

    public function About(){
        return $this->belongsTo('App/About');
    }



}
