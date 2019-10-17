<?php

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
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


  // 下载文件
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

  
  // 上传文件
  public function uploadFile(Request $request)
  {
    // var_dump($this->request);
    //获取表格的大小，限制上传表格的大小5M
    //print_r($_FILES);
    $file_size = $_FILES['file']['size'];
    if ($file_size > 5 * 1024 * 1024) {
      $this->error('文件大小不能超过5M');
      exit();
    }
    //限制上传表格类型
    $fileExtendName = substr(strrchr($_FILES['file']["name"], '.'), 1);
    //application/vnd.ms-excel  为xls文件类型
    if ($fileExtendName != 'xls') {
      $this->error('必须为excel表格，且必须为xls格式！');
      exit();
    }
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        // 有Xls和Xlsx格式两种
        $objReader = IOFactory::createReader('Xls');
        $filename = $_FILES['file']['tmp_name'];
        $objPHPExcel = $objReader->load($filename);  //$filename可以是上传的表格，或者是指定的表格
        $sheet = $objPHPExcel->getSheet(0);   //excel中的第一张sheet
        $highestRow = $sheet->getHighestRow();       // 取得总行数
        // $highestColumn = $sheet->getHighestColumn();   // 取得总列数

        //定义$usersExits，循环表格的时候，找出已存在的用户。
        $usersExits = [];
        $data = [];
        //循环读取excel表格，整合成数组。如果是不指定key的二维，就用$data[i][j]表示。
        for ($j = 2; $j <= $highestRow; $j++) {
            $data[$j - 2] = [
                'name' => $objPHPExcel->getActiveSheet()->getCell("A" . $j)->getValue(),
                'price' => $objPHPExcel->getActiveSheet()->getCell("B" . $j)->getValue(),
                'address' => $objPHPExcel->getActiveSheet()->getCell("C" . $j)->getValue()
            ];
          //  //看下用户名是否存在。将存在的用户名保存在数组里。
          //  $userExist = db('admin')->where('admin_username', $data[$j - 2]['admin_username'])->find();
          //  if ($userExist) {
          //      array_push($usersExits, $data[$j - 2]['admin_username']);
          //  }
        }
      //  print_r($data);

      //halt($usersExits);
        //如果有已存在的用户名，就不插入数据库了。
      //  if ($usersExits != []) {
      //      //把数组变成字符串，向前端输出。
      //      $c = implode(" / ", $usersExits);
      //      $this->error('Excel中以下用户名已存在:' . $c, "/backend/admin/create", '', 20);
      //      exit();
      //  }
        //halt($data);
        //插入数据库
        $ret = Db::table('order')->insertAll($data);
        // print_r($ret);
        if ($ret > 0) {
          return $this->success('添加成功！');
        }
      //  $res = db('admin')->insertAll($data);
      //  if ($res) {
      //      $this->success('上传成功！', '/backend/admin', '', 1);
      //  }
    }



  }


}