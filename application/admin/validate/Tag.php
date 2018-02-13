<?php

namespace app\admin\validate;

use think\validate;

class Tag extends Validate
{
    protected $rule = [
        'tag_name' => 'require',
    ];
    protected $message = [
        'tag_name.require' => '请输入标签名称'
    ];
}