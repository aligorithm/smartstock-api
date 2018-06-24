<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $guarded = [];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');
    }
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn("name", $roles)->first();
}

    public function hasRole($role)
    {
        return null !== $this->roles()->where("name", $role)->first();
    }
    public function sales(){
        return $this->hasMany(Sale::class,'staff_id');
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
