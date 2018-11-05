<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $fillable = [
        'percent',
    ];
    public function products() {
        return $this->hasMany('shoes\Product', 'id_product', 'id');
    }
}
