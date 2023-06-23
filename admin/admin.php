<?php 
    require_once '../Conn.php';
    $conn=Conn::getInstance();

    $selectBlogSQL="select * from blog_data";
    $blogList=$conn->query($selectBlogSQL);

    //分页功能
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $productsPerPage = 5;
    $offset = ($page - 1) * $productsPerPage;

    // Count the total number of products
    $totalProductsSql = "SELECT COUNT(*) as total FROM blog_data";
    $totalProductsResult = $conn->query($totalProductsSql);
    $totalProducts = $totalProductsResult->fetch_assoc()['total'];

    // Calculate the total number of pages
    $totalPages = ceil($totalProducts / $productsPerPage);

    $conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>博客管理主页面</title>
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
        <div id="admin-title">
          <dl>
            <dt>标题名称</dt><dd>发布日期</dd><dd>操作</dd>
          </dl>
        </div>
        <div id="admin-list">
          <dl>
            <dt>这里是博客标题</dt><dd>日期</dd><dd><a href="#" class="link02">编辑</a> | <a href="#" class="link02">删除</a></dd>
          </dl>
        </div>
        <div id="admin-no">暂时还没有日志，赶快写日志吧！</div>
        <div id="admin-bar">第一页　　上一页　　下一页　最后一页</div>
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