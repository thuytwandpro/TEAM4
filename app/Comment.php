<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'id_product',
        'id_sale',
        'name',
        'quantity',
        'price',
        'img',
        'content',
        'origin',
        'size',
        'gender',
        'slug',
    ];
    public function product() {
        return $this->belongsTo('shoes/Product', 'id_product', 'id');
    }
    public function customer() {
        return $this->belongsTo('shoes/Customer', 'id_customer', 'id');
    }
    public function employee() {
        return $this->belongsTo('shoes/Employee', 'id_employee', 'id');
    }
}
