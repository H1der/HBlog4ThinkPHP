<?php

namespace app\common\model;

use think\Model;
use think\Validate;

class Tag extends Model
{
    protected $pk = 'tag_id';
    protected $table = 'blog_tag';

    public function store($data)
    {
        return $data;
    }

    public function edit($data)
    {
        return $data;
    }


}
