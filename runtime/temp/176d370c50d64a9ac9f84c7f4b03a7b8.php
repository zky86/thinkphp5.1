<?php /*a:4:{s:58:"D:\phpStudy\WWW\tp5\application\index\view\news\index.html";i:1544007144;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542799991;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1544007155;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542862148;}*/ ?>
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
<script type="text/javascript" src="/static/common/cookie.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/index/css/index.css" />
<title><?php echo htmlentities($title); ?></title>

</head>
<body>

    <div class="yj-nav mc-hide">

  <div class="w-main f-bc f-cb">
    <span class="yj-nav-a <?php if(request()->controller() == 'Index'): ?>on<?php endif; ?> " >
      <a href="/"> <b>首页</b>
      </a>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'ListPage'): ?>on<?php endif; ?>">
      <a href="/commentlist"> <b>评论列表</b></a>
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
      <a href="/news"> <b>全部新闻</b></a>
        <div class="yj-nav-child" style="display: none;">
          <ul>
            <?php foreach($newList as $vo): ?>
              <!-- <li><a href="/index.php/index/news/index/type/<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></a></li> -->
              <li><a href="/news-<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
    </span>


    <span class="yj-nav-a <?php if(request()->controller() == 'CommentInput'): ?>on<?php endif; ?>">
      <a href="/commentinput"> <b>发布评论</b></a>
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
    <a href="/login">登陆</a>
    <a href="/register">注册</a>
  </div>

</div>


    <div class="new-page w1000">
        <div class="item-wrap">

          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>　
            <div class="item">
                <div class="title">
                    <!-- <a href="/index.php/index/NewsDetail?id=<?php echo htmlentities($list['id']); ?>" title="点击查看详情"><?php echo htmlentities($list['title']); ?></a> -->
                    <a href="/newsdetail-<?php echo htmlentities($list['id']); ?>" title="点击查看详情"><?php echo htmlentities($list['title']); ?></a>
                </div>
                <div class="des pt10">
                    <a href="/newsdetail-<?php echo htmlentities($list['id']); ?>"  title="点击查看详情"><?php echo htmlentities($list['des']); ?></a>
                </div>
            <!--     <div class="content pt10">
                    <?php echo $list['content']; ?>
                </div> -->
                <div class="time pt20">
                    <?php echo htmlentities($list['timer']); ?> 
                    <span class="ml20">
                        <?php if(( $list['type'] == 1)): ?> 
                            娱乐新闻
                        <?php elseif($list['type'] == 2): ?>
                            体育新闻
                        <?php else: ?> 
                            时事新闻
                        <?php endif; ?>
                    </span>
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