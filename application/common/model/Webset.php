<?php

namespace app\common\model;

use think\Model;

class Webset extends Model
{
    protected $pk = 'webset_id';
    protected $table = 'blog_webset';

    public function edit($data)
    {
        return $data;
    }
}
