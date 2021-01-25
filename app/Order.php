<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    }
}
