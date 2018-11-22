<?php

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;


// http://tp.local/public/index.php/index/HelloWorld
class News extends \app\admin\controller\Base
{
    public function index()
    {

        $list = Db::table('newstype')->select();

        $this->assign('list', $list);

        return $this->fetch('news/index');
    }
}