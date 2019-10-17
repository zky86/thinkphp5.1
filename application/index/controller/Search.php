<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
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
    ->where('name','like', '%' .$name. '%')
    ->where('address','like','%' . $address . '%')
    ->where('price',['>',$priceMin],['<',$priceMax],'and')
    ->order('id desc')
    ->select();
    return json($ret);
    // print_r($ret);
    // if ($ret > 0) {
    //   return $this->success('添加成功！');
    // }
    
  }

  public function exportExcelGet(Request $request)
  {
    // var_dump($this->request);
    $name = $this->request->param('name');
    $address = $this->request->param('address');
    $priceMin = $this->request->param('priceMin');
    $priceMax = $this->request->param('priceMax');
    // $data = $this->request->param();
    $ret = Db::table('order')
    ->where('name','like', '%' .$name. '%')
    ->where('address','like','%' . $address . '%')
    ->where('price',['>',$priceMin],['<',$priceMax],'and')
    ->order('id desc')
    ->select();
    //设置表头：
    $head = ['姓名', '价格', '地址'];
    //数据中对应的字段，用于读取相应数据：
    $keys = ['name', 'price', 'address'];    
    $this->exportExcel('用户信息表', $ret, $head, $keys);
  }


}