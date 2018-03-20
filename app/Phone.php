<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}