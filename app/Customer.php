<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];
    public function sale(){
        return $this->hasMany(Sale::class);
    }
}
