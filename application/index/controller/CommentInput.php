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


  // 图片上传
  public function uploadFile()
  {
    // 没有上传图片处理
    // print_r($_FILES);
    if (empty($_FILES["image"]["name"])) {
      echo 0;
      return ;
    };


    // 获取表单上传文件 例如上传了001.jpg
    $file = request()->file('image');

    // 移动到框架应用根目录/uploads/ 目录下
    $info = $file->move( '../public/uploads'); 
    
    if($info){
        // 成功上传后 获取上传信息
        // 输出 jpg
        // echo $info->getExtension();

        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
        echo $info->getSaveName();
        
        // 输出 42a79759f284b767dfcb2a0197904287.jpg
        // echo $info->getFilename(); 
    }else{
        // 上传失败获取错误信息
        echo $file->getError();
    }

  }
  

}