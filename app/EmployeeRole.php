<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class EmployeeRole extends Model
{
    public function role() {
        return $this->belongsTo('shoes/Role', 'id_role', 'id');
    }
    public function employee() {
        return $this->belongsTo('shoes/Employee', 'id_employee', 'id');
    }
}
