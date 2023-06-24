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
    <!---->
    <div id="main">
      <div id="left">
        <div id="admin-title">
          <dl>
            <dt>标题名称</dt><dd>发布日期</dd><dd>操作</dd>
          </dl>
        </div>
        <?php
            if($blogList->num_rows>0){
                while($row=$blogList->fetch_assoc()){
                    $blogID=$row['_id'];
                    $blogTitle=$row['blog_title'];
                    $blogDate=$row['blog_date'];
                    $blogType=$row['blog_type'];
                    $blogWeather=$row['blog_weather'];
                    $blogPic=$row['blog_pic'];
                    $blogContent=$row['blog_content'];
                    ?>
                    <div id="admin-list">
                        <dl>
                            <dt><?php echo $blogTitle?></dt>
                            <dd><?php echo $blogDate?></dd>
                            <dd>
                                <a href="blog-updata.php?blogID=<?php echo $blogID?>" class="link02">编辑</a> | 
                                <a href="blog-del.php?blogID=<?php echo $blogID?>" class="link02">删除</a></dd>
                        </dl>
                    </div>
                    <?php
                }
            }
            else{?>
                <div id="admin-no">暂时还没有日志，赶快写日志吧！</div>
                <?php
            }?>
        <div id="admin-bar">
            <?php
                if($totalProducts <= $productsPerPage){
                    echo "第一页 最后一页";
                }
                else{
                    echo "<a href='index.php?page=1'>第一页</a> ";
                    if ($page > 1) {
                    $prevPage = $page - 1;
                    echo "<a href='index.php?page=$prevPage'>上一页</a> ";
                    }
                    if ($page < $totalPages) {
                    $nextPage = $page + 1;
                    echo "<a href='index.php?page=$nextPage'>下一页</a> ";
                    }
                    echo "<a href='index.php?page=$totalPages'>最后一页</a>";
                }
            ?>
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
    <!---->
    <div id="bottom">Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号</div>
  </div>
</div>
</body>
</html>