<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function detailbills() {
        return $this->hasMany('shoes\DetailBill', 'id_bill', 'id');
    }
    public function customer() {
        return $this->belongsTo('shoes/Customer', 'id_customer', 'id');
    }
}
