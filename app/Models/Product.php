<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public static function setGoodSn()
    {
        return 'LZD' . time();
    }

    /**
     * 获取博客文章的评论
     */
    public function imge()
    {
        return $this->hasMany('App\Models\ProductImge', 'p_id', 'id');
    }
}
