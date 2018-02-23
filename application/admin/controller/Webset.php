<?php

namespace app\admin\controller;

use think\Controller;

class Webset extends Controller
{

    protected function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->db = new \app\common\model\Webset();
    }

    public function index()
    {
        $field = db('webset')->select();
        $this->assign('field', $field);
        return $this->fetch();
    }

    public function edit()
    {
//        halt($_POST);
        if (request()->isAjax()) {
            $res = $this->db->edit(input('post.'));
            $webset = new \app\common\model\Webset();
            $webset->save([
                'webset_value' => $res['webset_value'],
            ], ['webset_id' => $res['webset_id']]);
        }
    }
}