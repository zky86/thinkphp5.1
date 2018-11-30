<?php

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;


// http://tp.local/public/index.php/index/HelloWorld
class News extends \app\admin\controller\Base
{
    public function index(Request $request)
    {
        $type = $this->request->param('type');
        $title = "新闻管理";
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
        // print_r($list);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('title', $title);
        $this->assign('page', $page);


        return $this->fetch('news/index');
    }
}