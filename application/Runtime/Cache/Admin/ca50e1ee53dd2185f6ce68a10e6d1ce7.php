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
                    <li class="active"><a href="/myblog/admin.php/AdmReprint/index" style="font-family: '微软雅黑', '黑体'">内容管理</a></li>
                    <li><a href="/myblog/admin.php/AdmVip/index" style="font-family: '微软雅黑', '黑体'">会员管理</a></li>
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
                <a href="/myblog/admin.php/AdmReprint/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">转载文章</a>
                <a href="/myblog/admin.php/AdmNote/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">技术笔记</a>
                <a href="/myblog/admin.php/AdmDiary/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">我的日记</a>
                <a href="/myblog/admin.php/AdmResume/index" class="list-group-item active" style="font-family: '微软雅黑', '黑体'">我的简历</a>
            </div>
        </div>
        <!--end-->
        <!--右侧-->
        <div class="col-md-9 col-sm-7">
            <ul class="breadcrumb">
                <li>BlogCMS</li>
                <li style="font-family: '微软雅黑', '黑体'">内容管理</li>
                <li class="active" style="font-family: '微软雅黑', '黑体'">我的简历</li>
            </ul>
            <form action="/myblog/admin.php/AdmResume/update" method="post" enctype="multipart/form-data" >
                <div class="form-group">
                    <label>Signature</label>
                    <input class="form-control" value="<?php echo ($resume["signature"]); ?>" style="font-family: '微软雅黑', '黑体'" name="signature">
                </div>
                <div class="form-group">
                    <label>Well-known saying</label>
                    <textarea class="form-control" rows="3" name="saying"><?php echo ($resume["saying"]); ?></textarea>
                    <br>
                    <label>Writer</label>
                    <input class="form-control" value="<?php echo ($resume["writer"]); ?>" style="font-family: '微软雅黑', '黑体'" name="writer">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" id="exampleInputFile" name="imgPath">
                    <br>
                    <label>Describe</label>
                    <input class="form-control" value="<?php echo ($resume["imgdescribe"]); ?>" style="font-family: '微软雅黑', '黑体'" name="imgDescribe">
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