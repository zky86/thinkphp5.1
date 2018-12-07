<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;

// class Index extends Controller
// app\admin\controller\Base
class Search extends \app\index\controller\Base
{

  // http://tp.local/index.php/index/index
  public function index()
  {
    // print_r($this->loginOut());

    // 第一种方式，输出内容
    // $content = '<h3>测试</h3>';
    // // return $this->display($content);
    // return $this->view->display($content);//推荐


    // 第二种方式
    return $this->fetch('search/index');
  }


  public function searchdata(Request $request)
  {
    $name = $this->request->param('name');
    $address = $this->request->param('address');
    $priceMin = $this->request->param('priceMin');
    $priceMax = $this->request->param('priceMax');

    // $data = $this->request->param();


    $ret = Db::table('order')
    ->where('name','=', $name)
    ->whereOr('address','like','%' . $address . '%')
    ->whereOr('price',['>',$priceMin],['<',$priceMax],'and')
    ->order('id desc')
    ->select();
    return json($ret);
    // print_r($ret);
    // if ($ret > 0) {
    //   return $this->success('添加成功！');
    // }
    
  }
}