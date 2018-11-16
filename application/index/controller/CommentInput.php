<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;

class CommentInput  extends Controller
{

  // http://tp.local/index.php/index/ListPage

  public function index()
  {
    $this->assign('timer',time()); //时间戳，随机数
    // return 1;
    return $this->fetch('commentinput/index');
  }

  public function insert(Request $request)
  {
    //$name = $this->request->param('name');
    $data = $this->request->param();
    // print_r($data);
    $ret = Db::table('comments')->insertGetId($data);
    // print_r($ret);
    if ($ret > 0) {
      return $this->success('添加成功！');
    }
    //insertGetId 方法添加成功，返回插入数据的自增id值
  }
}