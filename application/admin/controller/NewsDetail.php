<?php

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;


// http://tp.local/public/index.php/index/HelloWorld
class NewsDetail extends \app\admin\controller\Base
{
    public function index(Request $request)
    {

        $id = $this->request->param('id');
        $detail = Db::table('news')->where('id',$id)->find();
        // print_r($detail);
        $this->assign('detail', $detail);
        return $this->fetch('newsdetail/index');
    }




}