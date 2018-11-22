<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;


// http://tp.local/public/index.php/index/HelloWorld
class News extends Controller
{
    public function index(Request $request)
    {

        $data = $this->request->param();
        // print_r($data);
        $type = $this->request->param('type');
        if (($type)) {
          $list = Db::table('news')->where('type',$type)->order("ID desc")->paginate(8);
        }
        else{
          $list = Db::table('news')->order("ID desc")->paginate(8);
        }
        
        $page = $list->render();

        // print_r($ret);
        $this->assign('list', $list);
        $this->assign('page', $page);
        return $this->fetch('news/index');

    }

    public function insert(Request $request)
    {
      //$name = $this->request->param('name');
      $data = $this->request->param();

      // print_r($data);
      $ret = Db::table('news')->insertGetId($data);
      // print_r($ret);
      if ($ret > 0) {
        return $this->success('添加成功！');
      }
      

      //insertGetId 方法添加成功，返回插入数据的自增id值
    }

}