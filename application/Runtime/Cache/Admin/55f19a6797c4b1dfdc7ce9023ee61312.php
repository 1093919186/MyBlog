<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BlogCMS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/myblog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Admin/adminindex.css">
    <script src="/myblog/public/JS/jquery-2.1.1.min.js"></script>
    <script src="/myblog/public/JS/bootstrap.min.js"></script>
</head>
<body>
<!--导航-->
<div class="myheading">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a href="/myblog/admin.php/AdmReprint/index" class="navbar-brand">BlogCMS</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mytab" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="mytab" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/myblog/admin.php/AdmReprint/index" style="font-family: '微软雅黑', '黑体'">内容管理</a></li>
                    <li class="active"><a href="/myblog/admin.php/AdmVip/index" style="font-family: '微软雅黑', '黑体'">会员管理</a></li>
                    <li><a href="/myblog/admin.php/AddContent/index" style="font-family: '微软雅黑', '黑体'">发布内容</a></li>
                    <li><a href="#" style="font-family: '微软雅黑', '黑体'">图片管理</a></li>       <!--先不开发-->
                </ul>

                <a href="/myblog/admin.php/Index/out" class="btn btn-default navbar-right navbar-btn">Go out</a>
            </div>
        </div>
    </nav>
</div>
<!--end-->

<!--content-->
<div class="container" id="content">
    <div class="row">
        <!--left-->
        <div class="col-md-3 col-sm-5">
            <div class="list-group">
                <a href="/myblog/admin.php/AdmVip/index" class="list-group-item active" style="font-family: '微软雅黑', '黑体'">修改信息</a>
                <a href="#" class="list-group-item" style="font-family: '微软雅黑', '黑体'">添加会员</a>                    <!--先不开发-->
            </div>
        </div>
        <!--end-->
        <!--右侧-->
        <div class="col-md-9 col-sm-7">
            <ul class="breadcrumb">
                <li>BlogCMS</li>
                <li style="font-family: '微软雅黑', '黑体'">会员管理</li>
                <li class="active" style="font-family: '微软雅黑', '黑体'">修改信息</li>
            </ul>
            <form action="/myblog/admin.php/AdmVip/update" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>UserName</label>
                    <input class="form-control" value="<?php echo ($admin["username"]); ?>" style="font-family: '微软雅黑', '黑体'" name="userName">
                </div>
                <div class="form-group">
                    <label>PassWord</label>
                    <input class="form-control" value="<?php echo ($admin["password"]); ?>" style="font-family: '微软雅黑', '黑体'" name="passWord">
                </div>
                <div class="form-group">
                    <label>IndexIcon</label>
                    <input type="file" id="exampleInputFile" name="imgPath">
                    <br>
                    <label>IndexSign</label>
                    <input class="form-control" value="<?php echo ($admin["indexsign"]); ?>" style="font-family: '微软雅黑', '黑体'" name="indexSign">
                </div>
                <div class="form-group">
                    <label>Sex</label>
                    <input class="form-control" value="<?php echo ($admin["sex"]); ?>" style="font-family: '微软雅黑', '黑体'" name="sex">
                </div>
                <div class="form-group">
                    <label>School</label>
                    <input class="form-control" value="<?php echo ($admin["school"]); ?>" style="font-family: '微软雅黑', '黑体'" name="school">
                </div>
                <div class="form-group">
                    <label>WeChat</label>
                    <input class="form-control" value="<?php echo ($admin["wechat"]); ?>" style="font-family: '微软雅黑', '黑体'" name="wechat">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" value="<?php echo ($admin["email"]); ?>" style="font-family: '微软雅黑', '黑体'" name="email">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
<!--end-->

<!--footer-->
<div class="footer">
    <a style="font-family: '微软雅黑', '黑体'" href="#">MyBlog：http：//www.baidu.com</a>
</div>
<!--end-->

<script>
    $("#mytab a").click(function(e){
        //       e.preventDefault();
        $(this).tab("show");
    });
</script>
</body>
</html>