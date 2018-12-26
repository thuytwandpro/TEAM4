<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    protected $fillable = [
        'id_user',
        'username',
        'address',
        'email',
        'phone',
        'status',
        'total',
        'note',
    ];
    public function detailbills() {
        return $this->hasMany('shoes\DetailBill', 'id_bill', 'id');
    }
    public function user() {
        return $this->belongsTo('shoes/User', 'id_user', 'id');
    }
}
