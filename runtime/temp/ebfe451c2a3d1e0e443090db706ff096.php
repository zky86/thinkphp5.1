<?php /*a:4:{s:66:"D:\phpStudy\WWW\tp5\application\index\view\commentinput\index.html";i:1542356790;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542347911;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1542341243;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542342080;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>留言</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?1542356803" />
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
</head>
<body>
  <div class="yj-nav mc-hide">
  <div class="w-main f-bc f-cb">

    <span class="yj-nav-a">
      <a href="javascript:;"> <b>首页</b>
      </a>
    </span>

    <span class="yj-nav-a">
      <a href="javascript:;"> <b>选项1</b></a>
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

    <span class="yj-nav-a">
      <a href="javascript:;"> <b>选项2</b></a>
      <div class="yj-nav-child" style="display: none;">
        <ul>
          <li>
            <a href="javascript:;">子选项2</a>
          </li>
          <li>
            <a href="javascript:;">子选项2</a>
          </li>
        </ul>
      </div>
    </span>

  </div>
</div>
  <div class="comment-page">

    <div class="item-wrap">
      <div class="item">
        <input type="text" name="name"  id="name" class="form-control" placeholder="请输入姓名">
      </div>
      <div class="item">
        <input type="text" name="tel" id="tel" class="form-control" placeholder="请输入电话">
      </div>
      <div class="item">
        <textarea  name="content" id="content"  class="content" placeholder="请输入内容" ></textarea>
      </div>
    </div> 

    <div class="btn" >
      <p class="p" id="btn" >提交</p>
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


  <script type="text/javascript">
    $(document).ready(function() {
      $('#btn').on('click', function(event) {
          var name = $("#name").val();
          var tel = $("#tel").val();
          var content = $("#content").val();
          if (!name) {
              alert("请输入姓名")
              return false;
          }
          if (!tel) {
              alert("请输入电话")
              return false;
          }
          if (!content) {
              alert("请输入内容")
              return false;
          }

          $.ajax({
            url: '/index.php/index/CommentInput/insert',
            data: {
              name : name,
              tel : tel ,
              content : content,
            },
            dataType: 'json',
            type: 'POST',
            cache: false,
            beforeSend: function() 
            {
              
            },
            success: function(ret) 
            {
              if (ret.code == 1) {
                alert("添加成功，请刷新");
                window.location.reload();
              }
            },    
            error: function() 
            {
              
            },    
          });
          
      });
    });
  </script>

</body>
</html>