<?php

namespace app\index\controller;

use think\Controller;

class Content extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
