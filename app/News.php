<?php

namespace shoes;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title',
        'description',
        'contents',
        'img',
        'slug',
    ];
}
