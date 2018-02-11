<?php

namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{
    protected $db;

    protected function initialize()
    {
        parent::initialize();
        $this->db = new \app\common\model\Category();
    }

    //首页
    public function index()
    {
        return $this->fetch();
    }


    //添加
    public function store()
    {

        if (request()->isPost()) {
            $res = $this->db->store(input('post.'));
//            halt($res);

//            if ($res['valid'])
//            {
//                $this->success($res['msg'],'index');
//            }
//            else
//            {
//                $this->error($res['msg']);exit;
//            }
            $validate = new \app\admin\validate\Category;
//            $result = $this->validate($res, 'app\index\validate\User.edit');

            if (!$validate->check($res)) {
//            return ['valid' => 0, 'msg' => $this->getError()];
                $this->error($validate->getError());
                exit;
            } else {
                $cate = new \app\common\model\Category([
                    'cate_name' => $res['cate_name'],
                    'cate_pid' => $res['cate_pid'],
                    'cate_sort' => $res['cate_sort']
                ]);
                $cate->save();
                $this->success('添加成功', 'index');
            }

        }
        return $this->fetch();
    }
}
