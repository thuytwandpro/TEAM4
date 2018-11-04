<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    public function product() {
        return $this->belongsTo('shoes/Product', 'id_product', 'id');
    }
    public function bill() {
        return $this->belongsTo('shoes/Bill', 'id_bill', 'id');
    }
}
