<?php

namespace app\admin\validate;

use  think\validate;

class Link extends Validate
{
    protected $rule = [
        'link_name' => 'require',
        'link_url' => 'require',
        'link_sort' => 'require|number|between:1,9999'
    ];
    protected $message = [
        'link_name.require' => '请填写友链名称',
        'link_url.require' => '请填写友链网址',
        'link_sort.require' => '请填排序',
        'link_sort.number' => '排序必须为数字',
        'link_sort.between' => '排序需要在1-9999之间',
    ];
}