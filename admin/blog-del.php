<?php
    $currentID=$_GET['blogID'];

    require_once '../Conn.php';
    $conn=Conn::getInstance();

    $selectCurrentSql="select distinct * from blog_data where _id='$currentID'";
    $currentBlog=$conn->query($selectCurrentSql);

    if($currentBlog->num_rows>0){
        $row=$currentBlog->fetch_assoc();
        $blogID=$row['_id'];
        $blogTitle=$row['blog_title'];
        $blogDate=$row['blog_date'];
        $blogType=$row['blog_type'];
        $blogWeather=$row['blog_weather'];
        $blogPic=$row['blog_pic'];
        $blogContent=$row['blog_content'];
    }

    if(isset($_POST['del_button'])){
        $deleteSQL="delete from blog_data where _id = '$currentID'";
        $conn->query($deleteSQL);

        header("Location:admin.php");
        exit;
    }
    $conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>删除博客页面</title>
<link href="../style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="box">
  <div id="left-bar">
    <div id="quickmenu"><img src="../images/work1.jpg" width="88" height="70" alt=""><img src="../images/work2.jpg" width="88" height="70" alt=""><img src="../images/work3.jpg" width="88" height="70" alt=""><img src="../images/work4.jpg" width="88" height="70" alt=""><img src="../images/work5.jpg" width="88" height="70" alt=""><img src="../images/left_btn.gif" width="105" height="22" style="margin-top:25px;" alt=""></div>
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
        <div id="title">删除博客</div>
        <div id="del_main">
        <div id="show-top"></div>
        <div id="show-main">
          <form id="form1" name="form1" method="post" action="">
          <div id="content-top">
            <div id="content-title"><img src="../images/<?php echo $blogType?>" width="19" height="20" alt="">这里是博客标题</div>
            <div id="content-tian"><img src="../images/<?php echo $blogWeather?>" width="16" height="16" alt=""></div>
            <div id="content-date"><?php echo $blogDate?></div>
          </div>
          <div id="content-text"><img src="../upload/<?php echo $blogPic?>" width="550" height="80" alt=""><br>
              <?php echo $blogContent?>
          </div>
          <div id="del_bottom">
            <input type="submit" name="del_button" id="del_button" value="确认删除">
          </div>
          </form>
        </div>
        <div id="show-bottom"></div>
      </div>
      </div>
      <div id="admin-right">
        <div id="right-gltext">
          <ul>
            <li><a href="admin.php" class="link01">管理博客</a></li>
            <li><a href="blog-add.php" class="link01">添加博客</a></li>
            <li><a href="../index.php" class="link01">退出管理</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="bottom">Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号</div>
  </div>
</div>
</body>
</html>
