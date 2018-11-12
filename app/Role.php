<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    public function user_roles() {
        return $this->hasMany('shoes\UserRole', 'id_role', 'id');
    }
    public function users() {
        return $this->belongsToMany('shoes\User', 'user_roles', 'id_role', 'id_user');
    }
}
