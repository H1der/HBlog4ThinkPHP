<?php

namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'arc_title' => 'require',
        'arc_author' => 'require',
        'arc_sort' => 'require|between:1,9999',
        'cate_id' => 'notIn:0',
    ];
}