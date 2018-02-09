<?php

namespace app\admin\controller;

use think\Controller;

class Entry extends Common
{
    public function index()
    {
        return $this->fetch();
    }
}
