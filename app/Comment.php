<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'id_product',
        'id_user',
        'id_parent',
        'content',
        'created_at',
        'updated_at'
    ];
    public function product() {
        return $this->belongsTo('shoes/Product', 'id_product', 'id');
    }
    public function employee() {
        return $this->belongsTo('shoes/User', 'id_user', 'id');
    }
}
