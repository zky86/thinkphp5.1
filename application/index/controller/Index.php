<?php

namespace app\index\controller;
use think\Controller;
use think\Request;


class Index extends Controller
{

  // http://tp.local/index.php/index/index
  public function index()
  {

    // 第一种方式，输出内容
    // $content = '<h3>测试</h3>';
    // // return $this->display($content);
    // return $this->view->display($content);//推荐

    // 第二种方式
    return $this->fetch('index');

  }



  // public function index(Request $request)
  // {
  //   return 1;
  //   // 获取name请求变量
  //   return $request->name;
  // }

  // 打印请求变量 http://tp.local/public/index.php/index/Index/index2/name/567
  public function index2(Request $request)
  {

    // 获取name请求变量
    return $request->name;
  }


}