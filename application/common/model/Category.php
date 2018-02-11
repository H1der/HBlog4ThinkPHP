<?php

namespace app\common\model;

use houdunwang\arr\Arr;
use think\Model;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';

    //获取树状结构
    public function getAll()
    {
        return Arr::tree(db('cate')->order('cate_sort desc,cate_id')->select(), 'cate_name', $fieldPri = 'cate_id', $fieldPid = 'cate_pid');
    }

    public function store($data)
    {
        return $data;
    }
}
