<?php

namespace app\index\controller;
use think\Controller;

// http://tp.local/public/index.php/index/HelloWorld
class HelloWorld extends \app\index\controller\Base
{
    public function index()
    {
        return 'hello，world！';
    }
}