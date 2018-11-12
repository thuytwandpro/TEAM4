<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    protected $fillable = [
        'id_customer',
        'id_user',
        'customer_name',
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
    public function customer() {
        return $this->belongsTo('shoes/Customer', 'id_customer', 'id');
    }
}
