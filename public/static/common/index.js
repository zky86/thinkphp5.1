$(function(){


  $('.yj-nav-a').hover(function(){
     $('.yj-nav-child',this).stop(false,true).slideDown('fast');
  },function(){
     $('.yj-nav-child',this).stop(false,true).slideUp('fast');
  });


  // 退出
  $('#loginOut').on('click', function(event) {
      $.ajax({
        url: '/index.php/index/LoginIn/loginOut',
        data: {
          code : 1
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
          location.href = "/index.php/index/index"
        },    
        error: function() 
        {
          
        },    
      });
  });


  // 返回顶部
  $('#go-top').on('click', function(event) {
      event.preventDefault();
      $("html,body").animate({scrollTop:0},200);
  });
  
});



