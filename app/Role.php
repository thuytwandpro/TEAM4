<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    public function employee_roles() {
        return $this->hasMany('shoes\EmployeeRole', 'id_role', 'id');
    }
}
