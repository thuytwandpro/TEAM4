<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    protected $table = 'employee_roles';
    protected $fillable = [
        'id_role',
        'id_employee',
    ];
    public function role() {
        return $this->belongsTo('shoes/Role', 'id_role', 'id');
    }
    public function employee() {
        return $this->belongsTo('shoes/User', 'id_employee', 'id');
    }
}
