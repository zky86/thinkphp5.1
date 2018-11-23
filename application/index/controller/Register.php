<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;

// http://tp.local/public/index.php/index/HelloWorld
class Register extends \app\index\controller\Base
{
    public function index()
    {
        return $this->fetch('register/index');
    }

    public function add(Request $request)
    {
        $captcha = new \think\captcha\Captcha();

        if( !$captcha->check(input('post.captcha')))
        {
            $this->error('验证码错误');
        }


        $name = $this->request->param('name');
        $password = $this->request->param('password');

        $password = $this->request->param('password');
        // $data = $this->request->param();
        $data = array(
            "name"=> $name,
            "password"=> $password
          );
        // print_r($data);
        // 
        // 先判断是否已经存在用户
        $rs = Db::table('user');
        if($rs->where(array("name"=>$name))->count()){
          //存在
          $this->error('用户名已经存在');
        }else{
          //不存在
          $ret = Db::table('user')->insertGetId($data);
          // print_r($ret);
          if ($ret > 0) {
            return $this->success('注册成功！');
          }
        }
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