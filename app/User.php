<?php

namespace shoes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'username',
        'password',
        'avatar',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function comments() {
        return $this->hasMany('shoes\Comment', 'id_user', 'id');
    }
    public function employee_roles() {
        return $this->hasMany('shoes\User', 'id_user', 'id');
    }
    public function bills() {
        return $this->hasMany('shoes\Bill', 'id_user', 'id');
    }
}
