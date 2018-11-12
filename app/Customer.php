<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'username',
        'password',
        'email',
        'phone',
        'address',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function bills() {
        return $this->hasMany('shoes\Bill', 'id_customer', 'id');
    }
    public function comments() {
        return $this->hasMany('shoes\Comment', 'id_customer', 'id');
    }
}
