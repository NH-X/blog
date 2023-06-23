<?php
    $currentID=$_GET['blogID'];

    require_once 'Conn.php';
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
        $blogContent=$row['blog_centent'];
    }
    $conn->close();
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>博客内容详情页面</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="box">
            <div id="left-bar">
                <div id="quickmenu">
                    <img src="images/work1.gif" width="88" height="70" alt="">
                    <img src="images/work2.gif" width="88" height="70" alt="">
                    <img src="images/work3.gif" width="88" height="70" alt="">
                    <img src="images/work4.gif" width="88" height="70" alt="">
                    <img src="images/work5.gif" width="88" height="70" alt="">
                    <img src="images/left_btn.gif" width="105" height="22" style="margin-top:25px;" alt="">
                </div>
            </div>
            <div id="main-bg">
                <div id="top">
                    <div id="logo">
                        <img src="images/logo.jpg" width="223" height="47" alt="">
                    </div>
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
                <div id="banner">
                    <img src="images/banner.jpg" width="808" height="343" alt="">
                </div>
                <div id="pic-bg">
                    <div id="pic-left">
                        <img src="images/work_left.gif" width="27" height="57" alt="">
                    </div>
                    <div class="pic01">
                        <img src="images/work6.gif" width="112" height="102" alt="">
                        <br>开心大眼仔
                    </div>
                    <div class="pic01">
                        <img src="images/work7.gif" width="112" height="102" alt="">
                        <br>绝望主妇
                    </div>
                    <div class="pic01">
                        <img src="images/work8.gif" width="112" height="102" alt="">
                        <br>精美图标集
                    </div>
                    <div class="pic01">
                        <img src="images/work9.gif" width="112" height="102" alt="">
                        <br>机器狗阿七
                    </div>
                    <div id="pic-right">
                        <img src="images/work_right.gif" width="27" height="57" alt="">
                    </div>
                </div>
              <div id="main">
                    <div id="left">
                        <div id="show-top"></div>
                        <div id="show-main">
                            <div id="content-top">
                                <div id="content-title">
                                    <img src="images/<?php echo $blogType?>" width="19" height="20" alt=""><?php echo $blogTitle?></div>
                                <div id="content-tian">
                                    <img src="images/<?php echo $blogWeather?>" width="16" height="16" alt="">
                                </div>
                                <div id="content-date"><?php echo $blogDate?></div>
                            </div>
                            <div id="content-text">
                                <img src="upload/<?php echo $blogPic?>" width="550" height="80" alt="">
                                <br><?php echo $blogContent?>
                            </div>
                        </div>
                        <div id="show-bottom"></div>
                    </div>
                    <div id="right">
                        <div id="right-menu">
                            <ul>
                                <li><img src="images/index11.gif" width="19" height="20" alt="">日志 Blogs</li>
                                <li><img src="images/index12.gif" width="17" height="18" alt="">文章 Aticle</li>
                                <li><img src="images/index13.gif" width="19" height="19" alt="">作品 Works</li>
                                <li><img src="images/index14.gif" width="20" height="17" alt="">图片 Photos</li>
                                <li><img src="images/index15.gif" width="21" height="18" alt="">其他 Others</li>
                                <li><img src="images/index16.gif" width="19" height="17" alt="">下载 Download</li>
                                <li><img src="images/index17.gif" width="21" height="19" alt="">留言 Guestbook</li>
                            </ul>
                        </div>
                        <div id="right-gltitle"><img src="images/index18.gif" width="81" height="19" alt=""></div>
                        <div id="right-gltext">
                            <ul>
                                <li><a href="./admin/login.php" class="link01">管理登录</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="bottom">Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号</div>
            </div>
        </div>
    </body>
</html>