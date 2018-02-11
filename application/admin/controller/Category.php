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
            halt($res);

//            if ($res['valid'])
//            {
//                $this->success($res['msg'],'index');
//            }
//            else
//            {
//                $this->error($res['msg']);exit;
//            }

        }
        return $this->fetch();
    }
}
