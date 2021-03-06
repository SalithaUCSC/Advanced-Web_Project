<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Phone extends Model
{
    // table name
    protected $table = 'phones';
    // primary key
    public $primaryKey = 'phone_id';
    // Timestamps
    // public $timestamps = true;

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function wishesGet(){
        return $this->hasMany('App\WishList');
    }
}
