<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public function products() {
        return $this->hasMany('shoes\Product', 'id_product', 'id');
    }
}
