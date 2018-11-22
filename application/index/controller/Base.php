<?php
// 公用类

namespace app\index\controller;
use think\Controller;
use think\facade\Session;
use think\Db;

class Base extends \think\Controller
{


  // 读取新闻类别
  public function initialize()
  {
    $newList = Db::table('newstype')->select();
    $this->assign('newList', $newList);
  }

}
