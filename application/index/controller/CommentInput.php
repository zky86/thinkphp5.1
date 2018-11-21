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

  /*
   * $name为表单上传的name值
   * $filePath为为保存在入口文件夹public下面uploads/下面的文件夹名称，没有的话会自动创建
   * $width指定缩略宽度
   * $height指定缩略高度
   * 自动生成的缩略图保存在$filePath文件夹下面的thumb文件夹里，自动创建
   * @return array 一个是图片路径，一个是缩略图路径，如下：
   * array(2) {
        ["img"] => string(57) "uploads/img/20171211\3d4ca4098a8fb0f90e5f53fd7cd71535.jpg"
        ["thumb_img"] => string(63) "uploads/img/thumb/20171211/3d4ca4098a8fb0f90e5f53fd7cd71535.jpg"
      }
   */
  public function uploadFile()
  {

    // 获取表单上传文件 例如上传了001.jpg
    $file = request()->file('image');

    if (empty($file)) {
      $this->error('没有上传文件');
      return ;
    };
    $info = $file->move( '../public/uploads');
  // 移动到框架应用根目录/uploads/ 目录下
    
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