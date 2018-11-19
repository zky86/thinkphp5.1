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
    $ret = Db::table('comments')->order("ID desc")->select();
    // print_r($ret);
    $this->assign("list", $ret);
    // return 1;
    return $this->fetch('listpage/index');
  }



}