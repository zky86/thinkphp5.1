<?php /*a:4:{s:64:"D:\phpStudy\WWW\tp5\application\admin\view\newsdetail\index.html";i:1543549544;s:60:"D:\phpStudy\WWW\tp5\application\admin\view\public\_meta.html";i:1542800001;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_header.html";i:1544061296;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_footer.html";i:1542862157;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/layui.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?[timer]" />

<script type="text/javascript" src="/static/common/layui.all.js"></script>
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/index/css/index.css" />
<title><?php echo htmlentities($detail['title']); ?></title>

</head>
<body>

    <div class="yj-nav mc-hide">

  <div class="w-main f-bc f-cb">
    <span class="yj-nav-a <?php if(request()->controller() == 'Index'): ?>on<?php endif; ?> " >
      <a href="/admin"> <b>后台管理首页</b>
      </a>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'ListPage'): ?>on<?php endif; ?>">
      <a href="/admin/commentlist"> <b>评论管理</b></a>
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
      <a href="/admin/news"> <b>新闻管理</b></a>
    </span>


    <span class="yj-nav-a <?php if(request()->controller() == 'PublishNews'): ?>on<?php endif; ?>">
      <a href="/admin/publishnews"> <b>发布新闻</b></a>
    </span>

  </div>

  <div class="login">
    <a href="/" title="前往前台首页" target="_blank">前台首页</a>
    <a href="javascript:;">您好，<?php echo Session::get('name');?></a>
    <a href="javascript:;" id="loginOut">退出</a>
  </div>

</div>


    <div class="new-detail-page w1000">
        <div class="item-wrap">

    
            <div class="item">
                <div class="title">
                    <?php echo htmlentities($detail['title']); ?>
                </div>
                <div class="des pt10">
                    <?php echo htmlentities($detail['des']); ?>
                </div>
                <div class="content pt10">
                    <?php echo $detail['content']; ?>
                </div>
                <div class="time pt20">
                    <?php echo htmlentities($detail['timer']); ?> 
                    <span class="ml20">
                        <?php if(( $detail['type'] == 1)): ?> 
                            娱乐新闻
                        <?php elseif($detail['type'] == 2): ?>
                            体育新闻
                        <?php else: ?> 
                            时事新闻
                        <?php endif; ?>
                    </span>
                </div>
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