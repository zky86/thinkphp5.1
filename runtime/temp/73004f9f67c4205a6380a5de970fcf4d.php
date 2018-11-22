<?php /*a:4:{s:58:"D:\phpStudy\WWW\tp5\application\admin\view\news\index.html";i:1542857836;s:60:"D:\phpStudy\WWW\tp5\application\admin\view\public\_meta.html";i:1542800001;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_header.html";i:1542799002;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_footer.html";i:1542342080;}*/ ?>
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
<title>发布新闻</title>

</head>
<body>

    <div class="yj-nav mc-hide">

  <div class="w-main f-bc f-cb">
    <span class="yj-nav-a <?php if(request()->controller() == 'Index'): ?>on<?php endif; ?> " >
      <a href="/index.php/admin/index"> <b>后台管理首页</b>
      </a>
    </span>

    <span class="yj-nav-a <?php if(request()->controller() == 'ListPage'): ?>on<?php endif; ?>">
      <a href="/index.php/admin/listPage"> <b>评论管理</b></a>
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
      <a href="/index.php/admin/news"> <b>发布新闻</b></a>
    </span>

  </div>

  <div class="login">
    <a href="/index.php/index/index" title="前往前台首页" target="_blank">前台首页</a>
    <a href="javascript:;">您好，<?php echo Session::get('name');?></a>
    <a href="javascript:;" id="loginOut">退出</a>
  </div>

</div>


    <div class="admin-news-page w1000">
      
      <div class="list-wrap">
        <div class="item-wrap">
            <div class="item">
                <div class="p1 p clearfix"><span class="w">标题：</span><input type="text"  id="title" class="input-text" /></div>
                <div class="p2 p clearfix"><span class="w">简述：</span><input type="text"  id="des" class="input-text" /></div>
                <div class="p3 p clearfix">
                    <span class="w">分类：</span>
                    <select id="type" class="sec"> 
                      <option value ="">请选择类别</option>
                      <option value ="1">娱乐新闻</option>
                      <option value ="2">体育新闻</option>
                      <option value="3">时事新闻</option>
                    </select>
                </div>
                <div class="p4 p clearfix"><span class="w">留言内容：</span><textarea name=" " id="content"  class="textarea-class" ></textarea></div>
            </div>
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
            var title = $("#title").val();
            var des = $("#des").val();
            var type = $("#type").val();
            var content = $("#content").val();
            if (!title) {
                layer.msg('请输入标题');
                return false;
            }
            if (!type) {
                layer.msg('请输选择分类');
                return false;
            }
            if (!content) {
                layer.msg('请输入内容');
                return false;
            }


            console.log(1);
            // return;

            $.ajax({
              url: '/index.php/index/News/insert',
              data: {
                title : title,
                type : type ,
                content : content,
                des : des,
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



      });

    </script>

    
</body>
</html>