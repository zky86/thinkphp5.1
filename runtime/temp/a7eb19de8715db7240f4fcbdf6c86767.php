<?php /*a:4:{s:60:"D:\phpStudy\WWW\tp5\application\index\view\search\index.html";i:1544500258;s:60:"D:\phpStudy\WWW\tp5\application\index\view\public\_meta.html";i:1544499480;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_header.html";i:1544166177;s:62:"D:\phpStudy\WWW\tp5\application\index\view\public\_footer.html";i:1542862148;}*/ ?>
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
<title>首页</title>

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


    <div class="search-page w1000">
      
      <div class="p1th">
        <div class="item-wrap">
            <div class="item clearfix">
                <div class="lbox fl">
                    姓名：
                </div>
                <div class="rbox fl">
                    <input type="text" name=" " id="name" class="input-text"  placeholder="请输入姓名"/>
                </div>
            </div> 

            <div class="item clearfix">
                <div class="lbox fl">
                    地址：
                </div>
                <div class="rbox fl">
                    <input type="text" name=" " id="address" class="input-text"  placeholder="请输入地址"/>
                </div>
            </div> 

            <div class="item clearfix">
                <div class="lbox fl">
                    价格区间：
                </div>
                <div class="rbox fl">
                    <input type="text" name=" " id="priceMin" class="input-text" style="width:120px;"  placeholder="请输入最小值"/>
                    -
                    <input type="text" name=" " id="priceMax" class="input-text"  style="width:120px;"    placeholder="请输入最大值"/>
                </div>
            </div> 
            
        </div>   

        <div class="btn"><button id="btn" class="layui-btn layui-btn-normal">查找</button></div>

      </div>


      <div class="p2th dn" id="ret">
        <div class="box1">查找结果：</div>

        <div class="box2">

          <div id="tplEle"></div>
          <script id="tplData" type="text/html">
            {%if list != 0 %}
              <table class="layui-table">
                <colgroup>
                  <col width="150">
                  <col width="200">
                  <col>
                </colgroup>
                <thead>
                  <tr>
                    <th>姓名</th>
                    <th>价格</th>
                    <th>地址</th>
                  </tr> 
                </thead>
                    
                {%each list %}
                  <tr>
                    <td> {%$value.name%}</td>
                    <td> {%$value.price%}</td>
                    <td> {%$value.address%}</td>
                  </tr> 
                {%/each%}
              </table>
            {%else%}
              <div class="no-data f16  fb">
                暂无数据...
              </div>
            {%/if%}
          </script>

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
    
    <script type="text/javascript">
      // var data = {
      //     title: '基本例子',
      //     isAdmin: true,
      //     list: ['文艺', '博客', '摄影', '电影', '民谣', '旅行', '吉他']
      // };
      // // 标准语法的界定符规则
      // template.defaults.rules[1].test = /{%([@#]?)[ \t]*(\/?)([\w\W]*?)[ \t]*%}/;
      // var html = template('test', data);
      // document.getElementById('content').innerHTML = html;

      $(document).ready(function() {
        $('#btn').on('click', function(event) {
            var name = $("#name").val();
            var address = $("#address").val();
            var priceMin = $("#priceMin").val();
            var priceMax = $("#priceMax").val();

            if (!name) {
                // alert("请输入姓名")
                layer.msg('请输入姓名');
                return false;
            }
            if (!address) {
                // alert("请输入电话")
                layer.msg('请输入地址');
                return false;
            }
            if (!priceMin) {
                // alert("请输入电话")
                layer.msg('请输入最小价格');
                return false;
            }
            if (!priceMax) {
                // alert("请输入电话")
                layer.msg('请输入最大价格');
                return false;
            }
            $.ajax({
              url: '/searchdata',
              data: {
                name : name,
                address : address ,
                priceMin : priceMin,
                priceMax : priceMax,
              },
              dataType: 'json',
              type: 'POST',
              cache: false,
              beforeSend: function() 
              {
                layer.load();
              },
              success: function(ret) 
              {
                layer.closeAll('loading');
                // console.log(ret);
                var data = {
                  "list" : []
                };
                data.list = ret;
                var html = template('tplData', data);
                $('#tplEle').html(html)
                $('#ret').removeClass('dn')
              },    
              error: function() 
              {
                layer.closeAll('loading');
              },    
            });
            
        });

      });

    </script>
</body>
</html>