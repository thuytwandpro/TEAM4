<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;
use shoes\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id_category',
        'id_sale',
        'name',
        'quantity',
        'price',
        'img',
        'content',
        'orgin',
        'size',
        'gender',
        'slug',
    ];
    public function category() {
        return $this->belongsTo('shoes\Category', 'id_category', 'id');
    }
    public function sale() {
        return $this->belongsTo('shoes\Sale', 'id_sale', 'id');
    }
    public function detailbills() {
        return $this->hasMany('shoes\DetailBill', 'id_product', 'id');
    }
    public function comments() {
        return $this->hasMany('shoes\Comment', 'id_product', 'id');
    }
}
