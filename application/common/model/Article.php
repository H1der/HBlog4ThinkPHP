<?php

namespace app\common\model;

use think\Model;

class Article extends Model
{
    protected $pk = 'arc_id';
    protected $table = 'blog_article';
    protected $auto = ['admin_id'];
    protected $insert = ['sendtime'];
    protected $update = ['updatetime'];

    protected function setAdminIdAttr($value)
    {
        return session('admin.admin_id');
    }

    protected function setSendTimeAttr($value)
    {
        return time();
    }

    protected function setUpdateTimeAttr($value)
    {
        return time();
    }

    //添加
    public function store($data)
    {


        return $data;
    }

    //获取文章首页数据
    public function getAll()
    {
        return db('article')->alias('a')
            ->join('__CATE__ c', 'a.cate_id=c.cate_id')->where('a.isrecycle', 2)
            ->field('a.arc_id,a.arc_title,a.arc_sort,a.arc_author,a.sendtime,c.cate_name')
            ->order('a.arc_sort desc,a.sendtime desc,a.arc_id desc')->paginate(2);
//        halt($data);
    }
}
