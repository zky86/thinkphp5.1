<?php
// 公用类

namespace app\index\controller;
use think\Controller;
use think\facade\Session;
use think\Db;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// var_dump($objExcel);

class Base extends \think\Controller
{

  // 读取新闻类别
  public function initialize()
  {
    $newList = Db::table('newstype')->select();
    $this->assign('newList', $newList);
  }


  /**
   * 导出excel表
   * $data：要导出excel表的数据，接受一个二维数组
   * $name：excel表的表名
   * $head：excel表的表头，接受一个一维数组
   * $key：$data中对应表头的键的数组，接受一个一维数组
   * 备注：此函数缺点是，表头（对应列数）不能超过26；
   *循环不够灵活，一个单元格中不方便存放两个数据库字段的值
  */
  public function exportExcel($name='测试表', $data=[], $head=[], $keys=[])
  {
    $count = count($head);  //计算表头数量
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    for ($i = 65; $i < $count + 65; $i++) {     //数字转字母从65开始，循环设置表头：
        $sheet->setCellValue(strtoupper(chr($i)) . '1', $head[$i - 65]);
    }

    /*--------------开始从数据库提取信息插入Excel表中------------------*/
    foreach ($data as $key => $item) {             //循环设置单元格：
        //$key+2,因为第一行是表头，所以写到表格时   从第二行开始写
        for ($i = 65; $i < $count + 65; $i++) {     //数字转字母从65开始：
            $sheet->setCellValue(strtoupper(chr($i)) . ($key + 2), $item[$keys[$i - 65]]);
            $spreadsheet->getActiveSheet()->getColumnDimension(strtoupper(chr($i)))->setWidth(20); //固定列宽
        }
    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $name . '.xlsx"');
    header('Cache-Control: max-age=0');
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');

    //删除清空：
    $spreadsheet->disconnectWorksheets();
    unset($spreadsheet);
    exit;
  }

}
