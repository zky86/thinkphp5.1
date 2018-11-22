<?php /*a:4:{s:66:"D:\phpStudy\WWW\tp5\application\index\view\commentinput\index.html";i:1542798857;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1542799991;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1542859866;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542342080;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>发布评论</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/layui.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?1542860141" />

<script type="text/javascript" src="/static/common/layui.all.js"></script>
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<script type="text/javascript" src="/static/common/cookie.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
  <script type="text/javascript" src="/static/common/ajaxfileupload.js"></script>
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
            <li>
              <a href="/index.php/index/news/index/type/1">娱乐新闻</a>
            </li>
            <li>
              <a href="/index.php/index/news/index/type/2">体育新闻</a>
            </li>
            <li>
              <a href="/index.php/index/news/index/type/3">时事新闻</a>
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

      <div class="item">
        <br /><br />
        <p>上传图片</p>
        <br /><br />
        <input type="file" id="file"  name="image"  >
        <br /><br />
        <img src="" width="200px" height="200px" id="img-change"  class="dn">
        <br /><br />
        <button id="saveImg" class=" layui-btn layui-btn-normal">保存图片</button>
      </div>

    </div> 

    <div class="btn" >
      <p class=" layui-btn layui-btn-normal" id="btn" >提交</p>
      <!-- class="layui-btn layui-btn-normal" -->
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
      var imgUrl = "";
      $('#btn').on('click', function(event) {
          var name = $("#name").val();
          var tel = $("#tel").val();
          var content = $("#content").val();
          if (!name) {
              // alert("请输入姓名")
              layer.msg('请输入姓名');
              return false;
          }
          if (!tel) {
              // alert("请输入电话")
              layer.msg('请输入电话');
              return false;
          }
          if (!content) {
              // alert("请输入内容")
              layer.msg('请输入内容');
              return false;
          }

          $.ajax({
            url: '/index.php/index/CommentInput/insert',
            data: {
              name : name,
              tel : tel ,
              content : content,
              imgurl : imgUrl,
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
                // alert("添加成功，请刷新");
                layer.open({
                  title: '',content: '添加成功...',
                  closeBtn: 0,
                  area: ['500px', '150px'],
                  yes: function(index, layero){
                      window.location.reload();
                      // layer.close(index); //如果设定了yes回调，需进行手工关闭
                  }
                });
              }
            },    
            error: function() 
            {
              
            },    
          });
          
      });


      // 图片上传
      $("#img-change").click(function () {
          $("#file").click();  //修改，这里如果不用onchange，会出现一个小bug,当你提交后，图片只能变一次
      })


      function filechange(event){
          var files = event.target.files, file;
          if (files && files.length > 0) {
              // 获取目前上传的文件
              file = files[0];// 文件大小校验的动作
              if(file.size > 1024 * 1024 * 2) {
                  alert('图片大小不能超过 2MB!');
                  return false;
              }
              // 获取 window 的 URL 工具
              var URL = window.URL || window.webkitURL;
              // 通过 file 生成目标 url
              var imgURL = URL.createObjectURL(file);
              //用attr将img的src属性改成获得的url
              $("#img-change").attr("src",imgURL);
              // 使用下面这句可以在内存中释放对此 url 的伺服，跑了之后那个 URL 就无效了
              // URL.revokeObjectURL(imgURL);
          }
      };

      $("#file").change(function(event){
        filechange(event);
        $('#img-change').removeClass('dn')
      });


      $("#saveImg").click(function () {
          $.ajaxFileUpload({
              url: '/index.php/index/CommentInput/uploadFile',
              fileElementId:'file',
              dataType:'JSON',
              secureuri : false,
              success: function (data){
                console.log(data);
                if (data == 0) {
                  // alert("添加成功，请刷新");
                  layer.msg( "请选择文件！" , {  
                      time: 2000, //20s后自动关闭  
                      // btn: ['明白了', '知道了']  
                    },function(){

                    }
                  );
                  return;
                }

                layer.msg( "上传成功！" , {  
                    time: 2000, //20s后自动关闭  
                    // btn: ['明白了', '知道了']  
                  },function(){
                    imgUrl = data;
                  }
                );

              },
              error:function(data,status,e){
                  alert(e);
              }
          });
      });




    });

  </script>

</body>
</html>