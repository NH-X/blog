<?php
    require_once '../Conn.php';
    $conn=Conn::getInstance();

    $selectBlogSQL="select * from admin_user";
    $blogList=$conn->query($selectBlogSQL);

    //处理登录请求
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];

        // 查询数据库中是否存在匹配的用户名和密码
        $hasUserSQL="select * from admin_user where username = '$username' and password= '$password'";
        $result=$conn->query($hasUserSQL);

        if($result->num_rows==1){
            //登录成功
            // 这里可以添加进一步的操作，例如设置登录状态或跳转到其他页面
            $conn->close();
            $_SESSION['admin']=$username;
            header("Location:admin.php");
        }
        else{
          // 登录失败
          // 这里可以添加相应的提示或跳转到登录页面
          echo "用户名或密码错误";
        }
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>博客管理登录页面</title>
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
    <div id="msg">
      <div id="title">管理登录</div>
      <div id="login">
        <form id="form1" name="form1" method="post">
          <ul>
            <li>管理员账号：
              <input name="username" type="text" required class="input01" id="username" placeholder="清输入管理员账号">
            </li>
            <li>管理员密码：
              <input name="password" type="password" required class="input01" id="password" placeholder="请输入管理员密码">
            </li>
            <li>
              <input type="submit" name="dn" id="dn" value="登 录">
            </li>
          </ul>
        </form>
      </div>
    </div>
    </div>
    <div id="bottom">Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号</div>
  </div>
</div>
</body>
</html>
