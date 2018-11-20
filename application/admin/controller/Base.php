<?php
// 公用类

namespace app\admin\controller;
use think\Controller;
use think\facade\Session;

class Base extends \think\Controller
{

  protected $siteName = 'PHP中文网';

  public function initialize()
  {
    
    // print_r(Session::get('name'));
    // 没有登录跳转前台
    if (empty(Session::get('name'))){
      $this->redirect('/index.php/index/index');
      return;
    }
  }

  protected function loginOut()
  {
    $user_name = cookie('name');
    // print_r($user_name);
    // return $this->siteName;
  }
}
