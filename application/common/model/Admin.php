<?php

namespace app\common\model;

use think\Model;
use think\Validate;

class Admin extends Model
{
    //主键
    protected $pk = 'admin_id';
    //表明
    protected $table = 'blog_admin';

    //登陆
    public function login($data)
    {
        //验证
        $validate = new \app\admin\validate\Admin();

        if (!$validate->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        //对比用户名和密码是否正确
        $userInfo = $this->where('admin_username', $data['admin_username'])->where('admin_password', $data['admin_password'])->find();

        //登陆失败
        if (!$userInfo) {
            return ['valid' => 0, 'msg' => '用户名或密码错误'];
        }
        //把信息存入session
        session('admin.admin_id', $userInfo['admin_id']);
        session('admin.admin_username', $userInfo['admin_username']);
        return ['valid' => 1, 'msg' => '登陆成功'];
    }

    public function pass($data)
    {
        $validate = new Validate([
            'admin_password' => 'require',
            'new_password' => 'require',
            'confirm_password' => 'require|confirm:new_password',
        ], [
            'admin_password.require' => '请输入原始密码',
            'new_password.require' => '请输入新密码',
            'confirm_password.require' => '请输入确认密码',
            'confirm_password.confirm' => '两次输入密码不一致'
        ]);

        if (!$validate->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
//            dump($validate->getError());
        }

        $userInfo = $this->where('admin_id', session('admin.admin_id'))->where('admin_password', $data['admin_password'])->find();

        if (!$userInfo) {
            return ['valid' => 0, 'msg' => '原始密码不正确'];
        }
        // save方法第二个参数为更新条件
        $res = $this->save([
            'admin_password' => $data['new_password']
        ], [$this->pk => session('admin.admin_id')]);
        if ($res) {
            return ['valid' => 1, 'msg' => '密码修改成功'];
        } else {
            return ['valid' => 0, 'msg' => '密码修改失败'];
        }
    }
}
