<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class DetailBill extends Model
{
    protected $table = 'detailbills';
    protected $fillable = [
        'id_bill',
        'id_product',
        'quantity',
        'price',
        'amount',
    ];
    public function product() {
        return $this->belongsTo('shoes/Product', 'id_product', 'id');
    }
    public function bill() {
        return $this->belongsTo('shoes/Bill', 'id_bill', 'id');
    }
}
