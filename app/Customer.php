<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function bills() {
        return $this->hasMany('shoes\Bill', 'id_customer', 'id');
    }
    public function comments() {
        return $this->hasMany('shoes\Comment', 'id_customer', 'id');
    }
}
