<?php

namespace app\common\model;

use think\Model;

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
        session('admin.admin_id',$userInfo['admin_id']);
        session('admin.admin_username',$userInfo['admin_username']);
        return ['valid'=>1,'msg'=>'登陆成功'];
    }
}
