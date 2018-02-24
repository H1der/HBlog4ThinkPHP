<?php

namespace app\index\controller;

use think\Controller;

class Lists extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
