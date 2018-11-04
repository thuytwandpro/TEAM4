<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products() {
        return $this->hasMany('shoes\Product', 'id_category', 'id');
    }

}
