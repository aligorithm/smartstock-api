<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function sales(){
        return $this->hasMany(Sale::class);
    }
    public function staff(){
        return $this->belongsTo(User::class);
    }
}
