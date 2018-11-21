<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;


// http://tp.local/public/index.php/index/HelloWorld
class News extends Controller
{
    public function index()
    {
        $list = Db::table('news')->order("ID desc")->paginate(8);
        $page = $list->render();
        // print_r($ret);
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch('news/index');
    }
}