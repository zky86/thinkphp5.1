<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;

class ListPage extends Controller
{
  // http://tp.local/index.php/index/ListPage
  public function index()
  {
    $list = Db::table('comments')->order("ID desc")->paginate(8);
    $page = $list->render();
    // print_r($ret);
    $this->assign('list', $list);
    $this->assign('page', $page);
    return $this->fetch('listpage/index');
  }

}