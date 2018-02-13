<?php

namespace app\admin\controller;

use think\Controller;

class Tag extends Controller
{
    protected $db;

    protected function initialize()
    {
        parent::initialize();
        $this->db = new \app\common\model\Tag();
    }

    public function index()
    {
        //获取首页数据
        $field = db('tag')->paginate(5);
        $this->assign('field', $field);

        return $this->fetch();
    }

    //添加
    public function store()
    {
        $tag_id = input('param.tag_id');
        if (request()->isPost()) {
            $res = $this->db->store(input('post.'));
            $validate = new \app\admin\validate\Tag;
            if (!$validate->check($res)) {
                $this->error($validate->getError());
                exit;
            } else {
                $Tag = new \app\common\model\Tag([
                    'tag_name' => $res['tag_name'],
                    'tag_id' => $tag_id,
                ]);
                $Tag->save();
                $this->success('添加成功', 'index');
            }
        }
//
//        if ($tag_id) {
//            //编辑
//            $oldData = $this->db->find($tag_id);
//
//        } else {
//            //添加
//            $oldData = ['tag_name' => ''];
//        }
//        $this->assign('oldData', $oldData);
        return $this->fetch();

//        $tag_id = input('param.tag_id');
//        if (request()->isPost()) {
//            $res = $this->db->store(input('post.'));
//            if ($res['valid']) {
//                //执行成功
//                $this->success($res['msg'], 'index');
//                exit;
//            } else {
//                //执行失败
//                $this->error($res['msg']);
//                exit;
//            }
//        }
//        if ($tag_id) {
//            //说明是编辑请求
//            $oldData = $this->db->find($tag_id);
//
//        } else {
//            //添加
//            $oldData = ['tag_name' => ''];
//        }
//        $this->assign('oldData', $oldData);
//        return $this->fetch();
    }

    public function edit()
    {
        if (request()->isPost()) {
            $validate = new \app\admin\validate\Tag;
            $res = $this->db->edit(input('post.'));
            if (!$validate->check($res)) {
                $this->error($validate->getError());
                exit;
            } else {
                $cate = new \app\common\model\Tag();
                $cate->save([
                    'tag_name' => $res['tag_name']],
                    ['tag_id' => $res['tag_id']]);
                $this->success('修改成功', 'index');
            }
        }
        $tag_id = input('param.tag_id');
        $oldData = $this->db->find($tag_id);
        $this->assign('oldData', $oldData);
        return $this->fetch();
    }

    public function del()
    {
        $tag_id = input('get.tag_id');
        if (\app\common\model\Tag::destroy($tag_id)) {
            $this->success('删除成功', 'index');
            exit;
        } else {
            $this->error('删除失败');
            die;
        }
    }
}
