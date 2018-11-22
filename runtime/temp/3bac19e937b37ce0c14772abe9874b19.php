<?php /*a:4:{s:62:"D:\phpStudy\WWW\tp5\application\index\view\listpage\index.html";i:1542798832;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542799991;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1542868182;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542862148;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>评论列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/layui.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?[timer]" />

<script type="text/javascript" src="/static/common/layui.all.js"></script>
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<script type="text/javascript" src="/static/common/cookie.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/list/css/list.css" />
</head>
<body>
    <div class="yj-nav mc-hide">

  <div class="w-main f-bc f-cb">
    <span class="yj-nav-a <?php if(request()->controller() == 'Index'): ?>on<?php endif; ?> " >
      <a href="/index.php/index/index"> <b>首页</b>
      </a>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'ListPage'): ?>on<?php endif; ?>">
      <a href="/index.php/index/listPage"> <b>评论列表</b></a>
<!--       <div class="yj-nav-child" style="display: none;">
        <ul>
          <li>
            <a href="javascript:;">子选项1</a>
          </li>
          <li>
            <a href="javascript:;">子选项1</a>
          </li>
        </ul>
      </div> -->
    </span>


    <span class="yj-nav-a <?php if(request()->controller() == 'News'): ?>on<?php endif; ?>">
      <a href="/index.php/index/news"> <b>全部新闻</b></a>
        <div class="yj-nav-child" style="display: none;">
          <ul>
            <?php foreach($newList as $vo): ?>
              <li><a href="/index.php/index/news/index/type/<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
    </span>


    <span class="yj-nav-a <?php if(request()->controller() == 'CommentInput'): ?>on<?php endif; ?>">
      <a href="/index.php/index/CommentInput"> <b>发布评论</b></a>
<!--       <div class="yj-nav-child" style="display: none;">
        <ul>
          <li>
            <a href="javascript:;">子选项2</a>
          </li>
          <li>
            <a href="javascript:;">子选项2</a>
          </li>
        </ul>
      </div> -->
    </span>

    

  </div>

  <div class="login">
    <a href="/index.php/index/LoginIn">登陆</a>
    <a href="/index.php/index/register">注册</a>
  </div>

</div>

    <div class="list-page w1000">

        <div class="list-wrap">
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>　
            <div class="item">
                <div class="p1 p"><span class="w">用户名：</span><?php echo htmlentities($list['name']); ?></div>
                <div class="p2 p"><span class="w">电话号码：</span><?php echo htmlentities($list['tel']); ?></div>
                <div class="p3 p"><span class="w">留言时间：</span><?php echo htmlentities($list['timer']); ?></div>
                <div class="p4 p"><span class="w">留言内容：</span><?php echo htmlentities($list['content']); ?></div>
                <div class="p5 p">
                  <span class="w">留言图片：</span>
                  <?php if($list['imgurl']): ?> 
                    <br />
                    <img src="/uploads/<?php echo htmlentities($list['imgurl']); ?>" />
                  <?php endif; ?>
              </div>
            </div> 
          <?php endforeach; endif; else: echo "" ;endif; ?>

          <div class="page">
              <?php echo $page; ?>
          </div>
        
        </div>

    </div>     

    <div class="footer">
  <div class="w-main f-bc f-cb">
    <!-- <ul class="footer-links">
      <li class="footer-links-bd">
        <a href="javascript:;" >选项1</a>
      </li>
      <li class="footer-links-bd">
        <a href="javascript:;">选项2</a>
      </li>
    </ul> -->
    底部
  </div>
</div>

<div id="go-top" class="go-top">
  <a href="javascript:;">返回顶部</a>
</div>
</body>
</html>