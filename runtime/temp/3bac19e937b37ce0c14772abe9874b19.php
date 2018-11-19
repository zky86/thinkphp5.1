<?php /*a:4:{s:62:"D:\phpStudy\WWW\tp5\application\index\view\listpage\index.html";i:1542595027;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542347911;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1542593185;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542342080;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>列表页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?[timer]" />
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/list/css/list.css" />
</head>
<body>
    <div class="yj-nav mc-hide">
  <div class="w-main f-bc f-cb">

    <span class="yj-nav-a <?php if(request()->controller() == 'Index'): ?>on<?php endif; ?> " >
      <a href="javascript:;"> <b>首页</b>
      </a>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'ListPage'): ?>on<?php endif; ?>">
      <a href="/index.php/index/listPage"> <b>列表</b></a>
      <div class="yj-nav-child" style="display: none;">
        <ul>
          <li>
            <a href="javascript:;">子选项1</a>
          </li>
          <li>
            <a href="javascript:;">子选项1</a>
          </li>
        </ul>
      </div>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'CommentInput'): ?>on<?php endif; ?>">
      <a href="/index.php/index/CommentInput"> <b>留言</b></a>
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
</div>

    <div class="list-page w1000">

        <div class="list-wrap">

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>　
          <div class="item">
              <div class="p1 p"><span class="w">用户名：</span><?php echo htmlentities($vo['name']); ?></div>
              <div class="p2 p"><span class="w">电话号码：</span><?php echo htmlentities($vo['tel']); ?></div>
              <div class="p3 p"><span class="w">留言时间：</span><?php echo htmlentities($vo['timer']); ?></div>
              <div class="p3 p"><span class="w">留言内容：</span><?php echo htmlentities($vo['content']); ?></div>
              
          </div> 
        <?php endforeach; endif; else: echo "" ;endif; ?>


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
</body>
</html>