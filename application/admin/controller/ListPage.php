<?php

namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;

class ListPage extends Controller
{
  // http://tp.local/index.php/index/ListPage
  public function index()
  {
    $list = Db::table('comments')->order("ID desc")->paginate(8);
    $page = $list->render();
    // print_r($ret);
    $this->assign('list', $list);
    $this->assign('page', $page);
    return $this->fetch('listpage/index');
  }

  public function del(Request $request)
  {
    $id = $this->request->param('id');
    // print_r($data);
    $ret = Db::table('comments')->where('id',$id)->delete();
    if ($ret > 0) {
      return $this->success('删除成功！');
    }
  }

  public function update(Request $request)
  {
    $id = $this->request->param('id');
    $txt = $this->request->param('txt');
  
    $ret = Db::name('comments')
        ->where('id', $id)
        ->update(['content' => $txt]);

    if ($ret > 0) {
      return $this->success('修改成功！');
    }
  }

}