<?php

namespace app\common\model;

use think\Model;

class Link extends Model
{
    protected $pk = 'link_id';
    protected $table = 'blog_link';

    public function store($data)
    {
        return $data;
    }

    public function edit($data)
    {
        return $data;
    }
}
