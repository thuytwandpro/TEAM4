<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'user_roles';
    protected $fillable = [
        'id_role',
        'id_user',
    ];
    public function role() {
        return $this->belongsTo('shoes/Role', 'id_role', 'id');
    }
    public function user() {
        return $this->belongsTo('shoes/User', 'id_user', 'id');
    }
}
