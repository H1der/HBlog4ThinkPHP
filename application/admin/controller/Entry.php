<?php

namespace app\admin\controller;

use app\common\model\Admin;
use think\Controller;

class Entry extends Common
{
    /**
     * 后台主页
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 修改密码
     * @return mixed
     */
    public function pass()
    {
        if (request()->isPost()) {
            $res = (new Admin())->pass(input('post.'));
            if ($res['valid']) {
                //清除session
                session(null);
                //修改成功
                $this->success($res['msg'], 'admin/entry/index');
                exit;
            } else {
                $this->error($res['msg']);
                exit;
            }
        }
        return $this->fetch();
    }
}
