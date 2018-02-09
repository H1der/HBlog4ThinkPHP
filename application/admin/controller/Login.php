<?php

namespace app\admin\controller;

use app\common\model\Admin;
use houdunwang\crypt\Crypt;
use think\Controller;

class Login extends Controller
{
    public function index()
    {

//        $data=  db('admin')->find(1);
//        dump($data);

        if (request()->isPost()) {
            $res = (new Admin())->login(input('post.'));
            if ($res['valid']) {
                $this->success($res['msg'], 'admin/entry/index');
            } else {
                $this->error($res['msg']);
                exit;
            }
        }
        return $this->fetch();
    }
}
