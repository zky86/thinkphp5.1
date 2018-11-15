<?php
namespace app\index\controller;

use think\Controller;

class Index 
{
    public function hello()
    {
        return 'hello,world!';
    }
    
    public function data()
    {
        return ['name'=>'thinkphp','status'=>1];
    }
    
}