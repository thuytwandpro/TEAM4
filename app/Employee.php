<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function comments() {
        return $this->hasMany('shoes\Comment', 'id_employee', 'id');
    }
    public function employee_roles() {
        return $this->hasMany('shoes\Employee', 'id_employee', 'id');
    }
    public function bills() {
        return $this->hasMany('shoes\Bill', 'id_employee', 'id');
    }
}
