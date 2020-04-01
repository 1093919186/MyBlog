<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>马西骑的博客</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/myBlog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="/myBlog/public/CSS/Public.css">
    <link rel="stylesheet" href="/myBlog/public/CSS/PublicTwo.css">
    <link rel="stylesheet" href="/myBlog/public/CSS/index.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="/myBlog/public/JS/jquery-2.1.1.min.js"></script>
    <script src="/myBlog/public/JS/bootstrap.min.js"></script>
    <script src="/myBlog/public/JS/Public.js"></script>
</head>
<body class="home-template">
<!-- start header -->
<header class="main-header"  style="background-image: url(/myBlog/public/images/headerBJ.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- start logo -->
                <a class="branding" href="#" title="西骑一个帅气的boy"><img src="/myBlog/<?php echo ($self["imgpath"]); ?>" alt=""></a>
                <!-- end logo -->
                <h2 class="mySign"><?php echo ($self["indexsign"]); ?></h2>
                <!--<img src="http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg" alt="Ghost 博客系统" class="hide">-->
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- start navigation -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li class="nav-current" role="presentation"><a href="/myBlog/index.php/Index/index.html">转载</a></li>
                        <li  role="presentation"><a href="/myBlog/index.php/Note/index.html">技术笔记</a></li>
                        <li  role="presentation"><a href="/myBlog/index.php/Diary/index.html">日记本</a></li>
                        <li  role="presentation"><a href="/myBlog/index.php/Album/index.html">相册</a></li>
                        <li  role="presentation"><a href="/myBlog/index.php/Resume/index.html">简历</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->

<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-md-8 main-content">

                <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><article id=<?php echo ($v["articleid"]); ?> class="post">
                    <div class="post-head">
                        <h1 class="post-title"><a href="/myBlog/index.php/ContentDet/index/articleId/<?php echo ($v["articleid"]); ?>"><?php echo ($v["title"]); ?></a></h1>
                        <div class="post-meta">
                            <span class="author">click：<?php echo ($v["hints"]); ?></span> &bull;
                            <span class="author">作者：<a href="<?php echo ($v["link"]); ?>"><?php echo ($v["writer"]); ?></a></span> &bull;
                            <time class="post-date" datetime="<?php echo ($v["dateandtime"]); ?>" title="<?php echo ($v["dateandtime"]); ?>"><?php echo ($v["dateandtime"]); ?></time>
                        </div>
                    </div>
                    <div class="featured-media">                    <!--此处注意-->
                        <a href="/myBlog/index.php/ContentDet/index/articleId/<?php echo ($v["articleid"]); ?>"><img src="/myBlog/<?php echo ($v["imgpath"]); ?>" alt=""></a>
                    </div>
                    <div class="post-content featured-media">
                        <p><?php echo ($v["header"]); ?></p>
                    </div>
                    <div class="post-permalink">
                        <a href="/myBlog/index.php/ContentDet/index/articleId/<?php echo ($v["articleid"]); ?>" class="btn btn-default">阅读全文</a>
                    </div>

                    <footer class="post-footer clearfix">
                        <div class="pull-left tag-list">
                            <i class="fa fa-folder-open-o"></i>
                            <a href="<?php echo ($v["link"]); ?>"><?php echo ($v["origin"]); ?></a>
                        </div>
                        <div class="pull-right share">
                        </div>
                    </footer>
                </article><?php endforeach; endif; ?>

                <nav class="pagination" role="navigation">
                    <?php echo ($page); ?>
                </nav>


            </main>

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">IDCard</h4>
                    <div class="content community">
                        <p>sex：<?php echo ($self["sex"]); ?></p>
                        <p>school：<?php echo ($self["school"]); ?></p>
                        <p>weChat：<?php echo ($self["wechat"]); ?></p>
                        <p>email：<?php echo ($self["email"]); ?></p>
                        <!--                        <p><a href="http://wenda.ghostchina.com/" title="Ghost中文网问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 问答社区</a></p>
                                                <p><a href="http://weibo.com/ghostchinacom" title="Ghost中文网官方微博" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '官方微博'])"><i class="fa fa-weibo"></i> 官方微博</a></p>-->
                    </div>
                </div>
                <!-- end tag cloud widget -->

            </aside>

        </div>
    </div>
</section>

<!--footer-->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget">
                    <h4 class="title">友链</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com" title="Bootstrap中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'Bootstrap中文网'])" target="_blank">Bootstrap中文网</a>
                        <a href="https://www.jquery123.com/" title="jQuery中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'jQuery中文文档'])" target="_blank">jQuery中文文档</a>
                        <a href="http://www.91php.com/" title="91PHP" onclick="_hmt.push(['_trackEvent', 'link', 'click', '91PHP'])" target="_blank">91PHP</a>
                        <a href="http://www.sasschina.com/" title="SASS中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'SASS中文网'])" target="_blank">SASS中文网</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright &copy; <a href="http://www.ghostchina.com/">Ghost中文网</a></span> |
                <span><a href="#" target="_blank">马西骑的个人Blog--http://www.MXQBlog.com</a></span>
            </div>
        </div>
    </div>
</div>

<div id="置顶键" style="display: none;">
    <img src="/myBlog/public/images/返回顶部.jpg" class="小图标">
</div>
<!--end-->

</body>
</html>