<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';

    public function store($data)
    {
        return $data;
    }
}
