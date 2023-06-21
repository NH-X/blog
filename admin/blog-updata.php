<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>博客修改页面</title>
<link href="../style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="box">
  <div id="left-bar">
    <div id="quickmenu"><img src="../images/work1.gif" width="88" height="70" alt=""><img src="../images/work2.gif" width="88" height="70" alt=""><img src="../images/work3.gif" width="88" height="70" alt=""><img src="../images/work4.gif" width="88" height="70" alt=""><img src="../images/work5.gif" width="88" height="70" alt=""><img src="../images/left_btn.gif" width="105" height="22" style="margin-top:25px;" alt=""></div>
  </div>
  <div id="main-bg">
    <div id="top">
      <div id="logo"><img src="../images/logo.jpg" width="223" height="47" alt=""></div>
      <div id="menu">
        <ul>
          <li>博客</li>
          <li>相册</li>
          <li>案例</li>
          <li>服务</li>
          <li>博友</li>
          <li>留言</li>
          <li>联系</li>
        </ul>
      </div>
    </div>
    <div id="banner"><img src="../images/banner.jpg" width="808" height="343" alt=""></div>
    <div id="main">
      <div id="left">
        <div id="title">修改博客</div>
        <div id="blog-add">
          <form id="form1" name="form1" method="post">
              <ul>
                <li>博客标题：
                  <input name="blog_title" type="text" class="input01" id="blog_title" placeholder="请输入标题">
                </li>
                <li>发表日期：
                  <input type="text" name="add_date" id="add_date" class="input01">
                </li>
                <li>博客类型：
                  <input name="b_type" type="radio" value="index11.gif" checked="checked"> <img src="../images/index11.gif" width="19" height="20" title="日志" alt="">
                  <input type="radio" name="b_type" value="index12.gif"> <img src="../images/index12.gif" width="17" height="18" title="文章" alt="">
                  <input type="radio" name="b_type" value="index13.gif"> <img src="../images/index13.gif" width="19" height="19" title="作品" alt="">
                  <input type="radio" name="b_type" value="iindex14.gif"> <img src="../images/index14.gif" width="20" height="17" title="图片" alt="">
                  <input type="radio" name="b_type" value="index15.gif"> <img src="../images/index15.gif" width="21" height="18" title="其他" alt="">
                  <input type="radio" name="b_type" value="index16.gif"> <img src="../images/index16.gif" width="19" height="17" title="下载" alt="">
                </li>
                <li>今日天气：
                  <input name="b_weather" type="radio" value="weather_sun.gif" checked="checked"> <img src="../images/weather_sun.gif" width="16" height="16" alt="">
                  <input type="radio" name="b_weather" value="weather_cloudy.gif"> <img src="../images/weather_cloudy.gif" width="16" height="16" alt="">
                  <input type="radio" name="b_weather" value="weather_clouds.gif"> <img src="../images/weather_clouds.gif" width="16" height="16" alt="">
                  <input type="radio" name="b_weather" value="weather_lightning.gif"> <img src="../images/weather_lightning.gif" width="16" height="16" alt="">
                  <input type="radio" name="b_weather" value="weather_rain.gif"> <img src="../images/weather_rain.gif" width="16" height="16" alt="">
                  <input type="radio" name="b_weather" value="weather_snow.gif"> <img src="../images/weather_snow.gif" width="16" height="16" alt="">
                </li>
                <li>上传图片：
                  <input type="button" name="sc" id="sc" value="上传图片"> <img src="../images/1572.gif" alt="这是显示上传预览图片的位置" id="showImg" width="275" height="40"></li>
                <li>博客内容：
                  <textarea name="blog_text" class="input02" id="blog_text" placeholder="请输入内容"></textarea>
                </li>
              </ul>
              <input type="submit" name="qr" id="qr" value="确认修改">
          </form>
        </div>
      </div>
      <div id="admin-right">
        <div id="right-gltext">
          <ul>
            <li><a href="#" class="link01">管理博客</a></li>
            <li><a href="#" class="link01">添加博客</a></li>
            <li>退出管理</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="bottom">Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号</div>
  </div>
</div>
</body>
</html>
