<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function employee_roles() {
        return $this->hasMany('shoes\EmployeeRole', 'id_role', 'id');
    }
}
