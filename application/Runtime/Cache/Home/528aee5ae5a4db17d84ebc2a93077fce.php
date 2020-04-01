<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <title>内容详情</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/myblog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Public.css">
    <link rel="stylesheet" href="/myblog/public/CSS/PublicTwo.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Note.css">
    <script src="/myblog/public/JS/jquery-2.1.1.min.js"></script>
    <script src="/myblog/public/JS/bootstrap.min.js"></script>
    <script src="/myblog/public/JS/Public.js"></script>
</head>
<body class="home-template">
<!--nav-->
<nav role="navigation" class="nav navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/myblog/index.php/Index/index.html">Ma's Note</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mytab" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="mytab">
            <ul class="nav navbar-nav">
                <li><a href="/myblog/index.php/Index/index.html">转载</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">技术笔记<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><li><a href="#"><?php echo ($v["catename"]); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                </li>
                <li><a href="/myblog/index.php/Diary/index.html">日记本</a></li>
                <li><a href="/myblog/index.php/Album/index.html">相册</a></li>
                <li><a href="/myblog/index.php/Resume/index.html">简历</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="请输入内容">
                </div>
                <button class="btn btn-default">搜索</button>
            </form>
        </div>
    </div>
</nav>
<!--end-->

<!--content-->
<section class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-md-8 main-content">
                <article id=<?php echo ($content["articleid"]); ?> class="post" style="padding-bottom: 10px">
                    <div class="post-head">
                        <h1 class="post-title"><a href="#"><?php echo ($content["title"]); ?></a></h1>
                        <div class="post-meta">
                            <span class="author">click：<?php echo ($content["hints"]); ?></span> &bull;
                            <span class="author">作者：<a href="#"><?php echo ($content["writer"]); ?></a></span> &bull;
                            <time class="post-date" datetime="<?php echo ($content["dateandtime"]); ?>" title="<?php echo ($content["dateandtime"]); ?>"><?php echo ($content["dateandtime"]); ?></time>
                        </div>
                    </div>
                    <div class="post-content">
                        <p><?php echo ($content["header"]); ?></p>
                    </div>
                    <div class="featured-media">                    <!--此处注意-->
                        <img src="/myblog/<?php echo ($content["imgpath"]); ?>" alt="">
                    </div>
                    <div class="post-content">
                        <p><?php echo ($content["content"]); ?></p>
                    </div>
                </article>


            </main>

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">Recommend</h4>
                    <div class="content community">

                        <?php if(is_array($recommand)): foreach($recommand as $key=>$v): ?><p><a href="#"><?php echo ($v["title"]); ?></a></p><?php endforeach; endif; ?>

                    </div>
                </div>
                <!-- end tag cloud widget -->

            </aside>

        </div>
    </div>
</section>
<!--end-->

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
    <img src="/myblog/public/images/返回顶部.jpg" class="小图标">
</div>
<!--end-->
</body>
</html>