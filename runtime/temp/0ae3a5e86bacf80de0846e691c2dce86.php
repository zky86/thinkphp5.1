<?php /*a:4:{s:53:"D:\root\tp5\application\index\view\loginin\index.html";i:1563759222;s:52:"D:\root\tp5\application\index\view\public\_meta.html";i:1563759222;s:54:"D:\root\tp5\application\index\view\public\_header.html";i:1563759222;s:54:"D:\root\tp5\application\index\view\public\_footer.html";i:1563759222;}*/ ?>
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
<script type="text/javascript" src="/static/common/index.js"></script>
<script type="text/javascript" src="/static/common/template-web.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/index/css/index.css" />
<title>登陆</title>

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


        <span class="yj-nav-a <?php if(request()->controller() == 'Search'): ?>on<?php endif; ?>">
          <a href="/search"> <b>查找用户</b></a>
        </span>

    

  </div>

  <div class="login">
    <a href="/login">登陆</a>
    <a href="/register">注册</a>
  </div>

</div>


    <div class="login-page">
      
      <div class="login-box">
        <div class="p1">登陆</div>
        <div class="p2"><input type="text"  id="name" class="input-text" placeholder="请输入账号" /></div>
        <div class="p3"><input type="password" id="password" placeholder="请输入密码" class="input-text" /></div>
        <div class="p4"><input type="text" id="verify" placeholder="输入验证码" class="input-text" /><img src="<?php echo url('/index/LoginIn/verify'); ?>" alt="验证码加载中" id="captcha"/><div></div></div>

        <div class="btn">
          <div class="layui-btn layui-btn-normal" id="btn">确定</div>
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

<script type="text/javascript">
  $(document).ready(function() {
    // console.log(getCookie("user_id"));
    // 
    $("#captcha").click(function(event) {
       this.src = "<?php echo url('/index/LoginIn/verify'); ?>?"+Math.random();
    });

    $('#btn').on('click', function(event) {
      var name = $("#name").val();
      var password = $("#password").val();
      var verify = $("#verify").val();
      if (!name) {
          layer.msg('请输入姓名');
          return false;
      }
      if (!password) {
          // alert("请输入电话")
          layer.msg('请输入密码');
          return false;
      }
      if (!verify) {
          // alert("请输入电话")
          layer.msg('请输入验证码');
          return false;
      }

      $.ajax({
        url: '/index.php/index/LoginIn/login',
        data: {
          name : name,
          password : password,
          captcha : verify 
        },
        dataType: 'json',
        type: 'POST',
        cache: false,
        beforeSend: function() 
        {
          
        },
        success: function(ret) 
        {
          console.log(ret);
          if (ret.code == 1) {
            // alert("添加成功，请刷新");
            location.href = "/admin"
          }
          else{
            layer.msg(ret.msg);
          }
        },    
        error: function() 
        {
          
        },    
      });

    });
  });
</script>