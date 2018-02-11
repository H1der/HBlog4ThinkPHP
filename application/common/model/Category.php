<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';

    public function store($data)
    {
        //验证

//        $validate = new \app\admin\validate\Category;
//        if (!$validate->check($data)) {
//            return ['valid' => 0, 'msg' => $this->getError()];
////            dump($validate->getError());
//        } else {
//            return ['valid'=>1,'msg'=>'添加成功'];
//        }
        return $data;

        //添加

    }
}
