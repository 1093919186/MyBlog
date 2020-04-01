<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <title>马西骑的简历</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/myblog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Resume.css">
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
                <li><a href="/myblog/index.php/Note/index.html">技术笔记</a></li>
                <li><a href="/myblog/index.php/Diary/index.html">日记本</a></li>
                <li><a href="/myblog/index.php/Album/index.html">相册</a></li>
                <li class="active"><a href="/myblog/index.php/Resume/index.html">简历</a></li>
            </ul>
            <!--            <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="请输入内容">
                            </div>
                            <button class="btn btn-default">搜索</button>
                        </form>-->
        </div>
    </div>
</nav>

<!--content-->
<div class="container" id="content">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="container">
            <h1 class="text-center title-style">Ma's Resume</h1>
            <h2 class="text-center"><em><?php echo ($resume["signature"]); ?></em> </h2>
            <div class="row">
                <div class="container col-md-1"></div>
                <div id="middle-part" class="container col-md-10">
                    <div>
                        <img class="img-responsive" src="/myblog/<?php echo ($resume["imgpath"]); ?>" />
                    </div>
                    <div class="text-center text-margin">
                        <?php echo ($resume["imgdescribe"]); ?>
                    </div>
                </div>
            </div>
            <!--介绍区-->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10" id="tips-style">
                    <h1>Some of my information:</h1>
                    <br>
                    <ul>
                        <li><t>你好，我叫马西骑（Qi），出生于古都西安1995年的一个夜晚，现在中南大学读选矿专业研究生，是一个热爱编程的菜鸟程序员。我认可计算机会改变所有行业的的这种说法，而人工智能对各行各业的升级则是未来的一大趋势，选矿也不例外。所以，请不要认为我是在不务正业，相反我在走一条必然会通向一个行业未来的道路。</t></li>
                        <li><t>开通此微博是我在距研究生开学还有1个月的时候所做的决定，那时我在中越边境的一座矿山实习。这种实习在本科时也时常进行，只是那时，我对计算机的了解更多是集中在Web和App所体现出与数据库最简单的增删改查交互，而对背后所涉及的算法全然不问。这次的选厂之行使我对智能选厂有了设想，这是一个有计算机基础的选矿专业的准研究生自然产生的想法，毕竟读了研究生就要学习一些深层次的知识。写这个微博主要有2个目的：一是对我本科期间所学习的前端以及PHP编程进行一次系统性的复习；二是希望将自己学习的过程以笔记的形式记录下来，方便自己复习的同时也可以为遥远的你提供星星点点的帮助。</t></li>
                        <li><t>我信仰的学习方式是一种基于兴趣的公关学习，这里的兴趣学习是指完全基于自身的兴趣所进行的，这种学习使人富有激情，但有时候会使人陷入偏执，对别人产生的价值甚小，从而无法获得足够的社会回报；公关学习简单来讲就是为了考试或者获得社会所认可的荣誉而学习，这种学习高效且社会认可度高，但是往往不会使人痴迷，从而学习的过程很难发挥创造性。过去四年在学业上采用公关学习使我受益颇多，在计算机方面采取的兴趣学习，使我栽了跟头。研究生阶段我决定采取基于兴趣的公关式学习，用类社会主义的话来说就是要将个人兴趣与社会需要结合起来，自身优势、兴趣和社会需求共同决定方向，过程以公关为主，通过解决问题学习。</t></li>
                        <li><t>我兴趣爱好广泛，喜欢吃好吃的食物、喝好喝的饮品、玩故事写的好的单机游戏、听旋律优美的音乐、赏壮阔的风景看怡人的妹子。我是一个乐观、开朗的人，也非常想和一些有相同兴趣爱好和研究方向的人做朋友，所以我非常欢迎你添加我的微信和我交流技术方面的相关问题，最后谢谢你耐心看完了我的自我介绍。</t></li>
                    </ul>
                    <br>
                    <p class="sentence-style"><?php echo ($resume["saying"]); ?></p>
                    <div class="sign-style pull-right">
                        <p>—— <?php echo ($resume["writer"]); ?></p>
                    </div>
                    <br><br>
                    <div class="text-center" id="end">
                        <p> Written and coded by <a href="https://www.freecodecamp.cn/lynn081">Lynn</a> </p>
                    </div>
                </div>
            </div>
            <!--end-->
        </div>
    </div>
</div>
<!--end-->

<div id="置顶键" style="display: none;">
    <img src="/myblog/public/images/返回顶部.jpg" class="小图标">
</div>
</body>
</html>