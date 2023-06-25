<?php
    require_once 'Conn.php';
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
        <title>个人博客首页面</title>
        <link href="style/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="box">
            <div id="left-bar">
                <div id="quickmenu">
                    <img src="images/work1.jpg" width="88" height="70" alt="">
                    <img src="images/work2.jpg" width="88" height="70" alt="">
                    <img src="images/work3.jpg" width="88" height="70" alt="">
                    <img src="images/work4.jpg" width="88" height="70" alt="">
                    <img src="images/work5.jpg" width="88" height="70" alt="">
                    <img src="images/left_btn.gif" width="105" height="22" style="margin-top:25px;" alt="">
                </div>
            </div>
            <div id="main-bg">
                <div id="top">
                    <div id="logo"><img src="images/logo.jpg" width="223" height="47" alt=""></div>
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
                <div id="banner"><img src="images/banner.jpg" width="808" height="343" alt=""></div>
                <div id="pic-bg">
                    <div id="pic-left"><img src="images/work_left.gif" width="27" height="57" alt=""></div>
                    <div class="pic01"><img src="images/work6.jpg" width="112" height="102" alt=""><br>
                        弓箭女皇</div>
                    <div class="pic01"><img src="images/work7.jpg" width="112" height="102" alt=""><br>
                        蝙蝠侠</div>
                    <div class="pic01"><img src="images/work8.jpg" width="112" height="102" alt=""><br>
                        嗯嗯🤔</div>
                    <div class="pic01"><img src="images/work9.jpg" width="112" height="102" alt=""><br>
                        狐狸</div>
                    <div id="pic-right"><img src="images/work_right.gif" width="27" height="57" alt=""></div>
                </div>
                <div id="main">
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
                                <!---->
                                <div id="left"></div>
                                <div id="content-bg">
                                    <div id="content-top">
                                        <div id="content-title">
                                            <img src="images/<?php echo $blogType?>" width="19" height="20" alt="">
                                            <?php echo $blogTitle?>
                                        </div>
                                        <div id="content-tian">
                                            <img src="images/<?php echo $blogWeather?>" width="16" height="16" alt="">
                                        </div>
                                        <div id="content-date"><?php echo $blogDate?></div>
                                    </div>
                                    <div id="content-text">
                                        <img src="upload/<?php echo $blogPic?>" width="550" height="80" alt="">
                                        <br><?php echo substr($blogContent,0,260);echo "..."?>
                                    </div>
                                    <div id="content-more">
                                        <a href="show.php?blogID=<?php echo $blogID?>" target="_blank">
                                            <img src="images/blog_content07.gif" width="13" height="10" alt=""> 查看详情
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else{
                            echo "<div id='no-content'>暂时还没有日志，赶快写日志吧！</div>";
                        }?>
                    <div id="content-bar">
                        <?php
                            if($totalProducts <= $productsPerPage){
                                echo "第一页 最后一页";
                            }
                            else{
                                echo "<a href='blog_content.php?page=1'>第一页</a> ";
                                if ($page > 1) {
                                $prevPage = $page - 1;
                                echo "<a href='blog_content.php?page=$prevPage'>上一页</a> ";
                                }
                                if ($page < $totalPages) {
                                $nextPage = $page + 1;
                                echo "<a href='blog_content.php?page=$nextPage'>下一页</a> ";
                                }
                                echo "<a href='blog_content.php?page=$totalPages'>最后一页</a>";
                            }
                        ?>
                    </div>
                    </div>
                    <div id="right">
                        <div id="right-menu">
                            <ul>
                                <li><img src="images/blog_content11.png" width="19" height="20" alt="">日志 Blogs</li>
                                <li><img src="images/blog_content12.png" width="17" height="18" alt="">文章 Aticle</li>
                                <li><img src="images/blog_content13.png" width="19" height="19" alt="">作品 Works</li>
                                <li><img src="images/blog_content14.png" width="20" height="17" alt="">图片 Photos</li>
                                <li><img src="images/blog_content15.png" width="21" height="18" alt="">其他 Others</li>
                                <li><img src="images/blog_content16.png" width="19" height="17" alt="">下载 Download</li>
                                <li><img src="images/blog_content17.png" width="21" height="19" alt="">留言 Guestbook</li>
                            </ul>
                        </div>
                        <div id="right-gltitle">
                            <img src="images/blog_content18.gif" width="81" height="19" alt="">
                        </div>
                        <div id="right-gltext">
                            <ul>
                                <li>
                                    <a href="./admin/login.php" class="link01">管理登录</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <!---->
                <div id="bottom">
                    Kiss2018 Design 2018©all rights reserved    |   京ICP备00000000号
                </div>
            </div>
        </div>
    </body>
</html>
