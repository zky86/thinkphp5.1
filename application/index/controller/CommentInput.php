<?php

namespace app\index\controller;
use think\Controller;
use think\Request;


class CommentInput  extends Controller
{

  // http://tp.local/index.php/index/ListPage

  public function index()
  {
    $this->assign('timer',time()); //时间戳，随机数
    // return 1;
    return $this->fetch('commentinput/index');
  }



}