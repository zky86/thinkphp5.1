<?php

namespace app\index\controller;
use think\Controller;
use think\Request;


class ListPage extends Controller
{

  // http://tp.local/index.php/index/ListPage

  public function index()
  {
    // return 1;
    return $this->fetch('listpage/index');
  }



}