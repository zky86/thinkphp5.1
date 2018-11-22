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
        $type = $this->request->param('type');
        $title = "全部新闻";
        if (($type)) {
          $list = Db::table('news')->where('type',$type)->order("ID desc")->paginate(8);
          switch ($type) {
            case '1':
              $title = "娱乐新闻";
            break;
            
            case '2':
              $title = "体育新闻";
            break;

            case '3':
              $title = "时事新闻";
            break;
          }
        }
        else{
          $list = Db::table('news')->order("ID desc")->paginate(8);
        }
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('title', $title);
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