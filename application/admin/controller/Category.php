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

    /**
     * 首页
     * @return mixed
     */
    public function index()
    {
//        $field = db('cate')->select();
//        halt($field);
        $field = $this->db->getAll();
//        halt($field);
        $this->assign('field', $field);
        return $this->fetch();
    }


    /**
     * 添加
     * @return mixed
     */
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


    /**
     * 添加子集
     * @return mixed
     */
    public function addSon()
    {
        if (request()->isPost()) {
            $res = $this->db->store(input('post.'));
            $validate = new \app\admin\validate\Category;
            if (!$validate->check($res)) {
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
        $cate_id = input('param.cate_id');
        $data = $this->db->where('cate_id', $cate_id)->find();
        $this->assign('data', $data);
//        halt($cate_id);
        return $this->fetch();


    }
}
