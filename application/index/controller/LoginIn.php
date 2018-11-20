<?php

namespace app\index\controller;
use think\Controller;
use think\Db;
use think\facade\Session;

// http://tp.local/public/index.php/index/HelloWorld
class LoginIn  extends Controller
{
    public function index()
    {
      $this->assign('timer',time()); //时间戳，随机数
      // return 1;
      return $this->fetch('loginin/index');
    }


    public function login()
    {
      $param = input('post.');
      // print_r($param);
      if(empty($param['name'])){
        $this->error('用户名不能为空');
      }
      if(empty($param['password'])){
        $this->error('密码不能为空');
      }
      // 验证用户名
      $has = Db::table('user')->where('name',$param['name'])->find();
      // print_r($has);

      if(empty($has)){
          $this->error('用户名密码错误');
          return;
      }

      if($has['password'] != $param['password']){
          $this->error('密码错误');
          return;
      }

      // 记录用户登录信息
      // cookie('user_id', $has['id'], 3600);  // 一个小时有效期
      // cookie('name', $has['name'], 3600);

      Session::set('user_id',$has['id']);
      Session::set('name',$has['name']);

      $this->success('登陆成功');

      // 验证密码
      // $has['password'] != md5($param['password']
      // if($has['password'] != md5($param['password'])){
      //   $this->error('用户名密码错误');
      // }
      // $this->success('新增成功', '/admin/index',5, '页面跳转中...');
      // $this->redirect('/index.php/admin/index');


    }


    public function loginOut()
    {
      $param = input('post.');

      // cookie(null);
      // cookie('user_id', null);
      // cookie('name', null); 

      Session::delete('user_id');
      Session::delete('name');

      // $this->redirect(url('login/index'));
      $this->success('退出成功');
    }

}