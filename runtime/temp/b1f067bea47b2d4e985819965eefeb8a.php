<?php /*a:4:{s:62:"D:\phpStudy\WWW\tp5\application\index\view\register\index.html";i:1542708806;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542799991;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1542799500;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542342080;}*/ ?>
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
<title>注册</title>

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
      <a href="/index.php/index/news"> <b>新闻</b></a>
        <div class="yj-nav-child" style="display: none;">
          <ul>
            <li>
              <a href="javascript:;">娱乐新闻</a>
            </li>
            <li>
              <a href="javascript:;">体育新闻</a>
            </li>
            <li>
              <a href="javascript:;">时事新闻</a>
            </li>
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


    <div class="login-page">
      
      <div class="login-box">
        <div class="p1">注册</div>
        <div class="p2"><input type="text"  id="name" class="input-text" placeholder="请输入账号" /></div>
        <div class="p3"><input type="password" id="password" placeholder="请输入密码" class="input-text" /></div>

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

    
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    // console.log(getCookie("user_id"));

    $('#btn').on('click', function(event) {
      var name = $("#name").val();
      var password = $("#password").val();
      if (!name) {
          layer.msg('请输入姓名');
          return false;
      }
      if (!password) {
          // alert("请输入电话")
          layer.msg('请输入密码');
          return false;
      }

      $.ajax({
        url: '/index.php/index/register/add',
        data: {
          name : name,
          password : password 
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
            
            // location.href = "/index.php/admin/"
            layer.msg( ret.msg , {  
                time: 2000, //20s后自动关闭  
                // btn: ['明白了', '知道了']  
              },function(){
                location.reload();
              }
            );

          }
          else{
            // layer.msg(ret.msg);
            layer.msg( ret.msg , {  
                time: 2000, //20s后自动关闭  
                // btn: ['明白了', '知道了']  
              },function(){

              }
            );

          }
        },    
        error: function() 
        {
          
        },    
      });

    });
  });
</script>