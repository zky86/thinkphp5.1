<?php /*a:4:{s:62:"D:\phpStudy\WWW\tp5\application\admin\view\listpage\index.html";i:1542798760;s:60:"D:\phpStudy\WWW\tp5\application\admin\view\public\_meta.html";i:1542800001;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_header.html";i:1543550351;s:62:"D:\phpStudy\WWW\tp5\application\admin\view\public\_footer.html";i:1542862157;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>评论管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/static/common/reset.css" />
<link rel="stylesheet" type="text/css" href="/static/common/layui.css" />
<link rel="stylesheet" type="text/css" href="/static/common/model.css?[timer]" />

<script type="text/javascript" src="/static/common/layui.all.js"></script>
<script type="text/javascript" src="/static/common/jquery.js"></script>
<script type="text/javascript" src="/static/common/index.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="/static/index/css/reset.css" /> 变量配置路径-->
<link rel="stylesheet" type="text/css" href="/static/list/css/list.css" />
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
      <a href="/index.php/admin/PublishNews"> <b>新闻管理</b></a>
    </span>


    <span class="yj-nav-a <?php if(request()->controller() == 'News'): ?>on<?php endif; ?>">
      <a href="/index.php/admin/PublishNews"> <b>发布新闻</b></a>
    </span>

  </div>

  <div class="login">
    <a href="/index.php/index/index" title="前往前台首页" target="_blank">前台首页</a>
    <a href="javascript:;">您好，<?php echo Session::get('name');?></a>
    <a href="javascript:;" id="loginOut">退出</a>
  </div>

</div>


    <div class="list-page w1000">

        <div class="list-wrap">
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>　
            <div class="item">
                <div class="p1 p"><span class="w">用户名：</span><?php echo htmlentities($list['name']); ?></div>
                <div class="p2 p"><span class="w">电话号码：</span><?php echo htmlentities($list['tel']); ?></div>
                <div class="p3 p"><span class="w">留言时间：</span><?php echo htmlentities($list['timer']); ?></div>
                <div class="p3 p"><span class="w">留言内容：</span><?php echo htmlentities($list['content']); ?></div>

                <div class="p3 p">
                    <span class="w">留言图片：</span>
                    <br />
                    <?php if($list['imgurl']): ?> 
                      <img src="/uploads/<?php echo htmlentities($list['imgurl']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="p4 p"><span class="w">管理员操作：</span> <a href="javascript:;" data-role="del"  data-id="<?php echo htmlentities($list['id']); ?>">删除</a> <a href="javascript:;" data-role="edit" >修改</a></div>
                <div class="p5 p dn">
                  <textarea name=""  placeholder="请输入修改的内容" class="textarea-class" ></textarea>
                  <div class="layui-btn layui-btn-normal mt20" data-role="submim" data-id="<?php echo htmlentities($list['id']); ?>">提交</div>
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

<script type="text/javascript">
  $(document).ready(function() {

    // 删除
    $('[data-role="del"]').on('click', function(event) {
        var id = $(this).attr("data-id");
        layer.open({
          title: '',content: '是否确认删除？',
          closeBtn: 1,
          area: ['500px', '150px'],
          yes: function(index, layero){
            $.ajax({
              url: '/index.php/admin/ListPage/del',
              data: {
                id : id,
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
                  // layer.msg('删除成功！');


                  layer.msg( "删除成功！" , {  
                      time: 2000, //20s后自动关闭  
                      // btn: ['明白了', '知道了']  
                    },function(){
                      window.location.reload();
                    }
                  );

                }
              },    
              error: function() 
              {
                
              },    
            });
          }
        });
        
    });

   // 修改
  $('[data-role="edit"]').on('click', function(event) {
      $(this).parent().next().removeClass('dn');
  });

  $('[data-role="submim"]').on('click', function(event) {
      var id = $(this).attr("data-id");
      var txt = $(this).prev().val();
      if (!txt) {
          layer.msg('请输入内容！');
          return;
      }
      console.log(txt);
      $.ajax({
        url: '/index.php/admin/ListPage/update',
        data: {
          id : id,
          txt : txt
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
            layer.msg( "修改成功！" , {  
                time: 2000, //20s后自动关闭  
                // btn: ['明白了', '知道了']  
              },function(){
                window.location.reload();
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


