<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    //
    protected $fillable=['fname','lname','address','email','abinfo'];

public function Experience(){
    return $this->belongsTo('App/Experience');
}

}