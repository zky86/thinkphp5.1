<?php
// use think\Route;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

// 前台
Route::get('/', 'index/index');
Route::get('commentlist', 'index/listPage/index');
Route::get('news', 'index/news/index');
Route::POST('news/insert', 'index/News/insert');


Route::get('news-:type', 'index/news/index');   //http://tp.local/news/1
Route::get('newsdetail-:id', 'index/NewsDetail/index');   //http://tp.local/index.php/index/NewsDetail?id=15

Route::get('commentinput', 'index/CommentInput/index');
Route::get('login', 'index/LoginIn/index');
Route::get('register', 'index/register/index');
Route::get('search', 'index/Search/index');
Route::POST('searchdata', 'index/Search/searchdata');



// 后台
Route::get('admin/', 'admin/index');
Route::get('admin/commentlist', 'admin/listPage/index/');
Route::get('admin/publishnews', 'admin/PublishNews/index/');

Route::get('admin/news', 'admin/News/index/');
Route::get('admin/news', 'admin/News');
Route::get('admin/newsdetail-:id', 'admin/NewsDetail/index');




// 注册路由到index模块的News控制器的read操作
// Route::rule('news','index/News');

return [

];
