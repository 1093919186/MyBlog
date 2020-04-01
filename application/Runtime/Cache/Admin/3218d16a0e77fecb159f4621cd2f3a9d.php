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
    <link rel="stylesheet" href="/myblog/library/trumbowyg/design/css/trumbowyg.css">
    <style type="text/css">
        header {
            text-align: center;
        }
        #main {
            max-width: 960px;
            margin: 0 auto;
        }
    </style>
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
                    <li><a href="/myblog/admin.php/AdmVip/index" style="font-family: '微软雅黑', '黑体'">会员管理</a></li>
                    <li class="active"><a href="/myblog/admin.php/AddContent/index" style="font-family: '微软雅黑', '黑体'">发布内容</a></li>
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
                <a href="/myblog/admin.php/AddContent/index" class="list-group-item active" style="font-family: '微软雅黑', '黑体'">发布内容</a>
                <a href="/myblog/admin.php/TakeDiary/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">记日记</a>
                <a href="/myblog/admin.php/AdmCate/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">类目管理</a>
                <a href="/myblog/admin.php/AddCate/index" class="list-group-item" style="font-family: '微软雅黑', '黑体'">增加类目</a>
            </div>
        </div>
        <!--end-->
        <!--右侧-->
        <div class="col-md-9 col-sm-7">
            <ul class="breadcrumb">
                <li>BlogCMS</li>
                <li style="font-family: '微软雅黑', '黑体'">发布内容</li>
                <li class="active" style="font-family: '微软雅黑', '黑体'">发布内容</li>
            </ul>
            <form action="/myblog/admin.php/AddContent/add" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" placeholder="请输入标题" style="font-family: '微软雅黑', '黑体'" name="title">
                </div>
                <div class="form-group">
                    <label>Writer</label>
                    <input class="form-control" placeholder="请输入作者" style="font-family: '微软雅黑', '黑体'" name="writer">
                </div>
                <div class="form-group">
                    <label>Header</label>
                    <textarea class="form-control" rows="3" placeholder="Please Insert Header" name="header" style="font-family: '微软雅黑', '黑体'"></textarea>
                </div>
                <div class="form-group">
                    <label>Icon</label>
                    <input type="file" id="exampleInputFile" name="imgPath">
                </div>
                <div id="main" role="main">
                    <label>Content</label>
                    <div id="simple-editor" style="font-family: '微软雅黑', '黑体'">
                    </div>
                </div>
                <div class="form-group">
                    <label>From</label>
                    <input class="form-control" placeholder="请输入来源" style="font-family: '微软雅黑', '黑体'" name="origin">
                </div>
                <div class="form-group">
                    <label>Link</label>
                    <input class="form-control" placeholder="请输入来源链接" style="font-family: '微软雅黑', '黑体'" name="link">
                </div>
                <select class="form-control" style="font-family: '微软雅黑', '黑体'" name="type">
                    <option>转载</option>
                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option><?php echo ($v["catename"]); ?></option><?php endforeach; endif; ?>
                </select>
                <br>
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
<script src="http://www.jq22.com/jquery/1.8.3/jquery.min.js"></script>
<script src="/myblog/library/trumbowyg/trumbowyg.js"></script>
<script src="/myblog/library/trumbowyg/langs/fr.js"></script>
<script src="/myblog/library/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
<script src="/myblog/library/trumbowyg/plugins/base64/trumbowyg.base64.js"></script>
<script>
    /** Default editor configuration **/
    $('#simple-editor').trumbowyg();
    /********************************************************
     * Customized button pane + buttons groups + dropdowns
     * Use upload plugin
     *******************************************************/
    /*
     * Add your own groups of button
     */
    $.trumbowyg.btnsGrps.test = ['bold', 'link'];
    /* Add new words for customs btnsDef just below */
    $.extend(true, $.trumbowyg.langs, {
        fr: {
            align: 'Alignement',
            image: 'Image'
        }
    });
    $('#customized-buttonpane').trumbowyg({
        lang: 'fr',
        closable: true,
        fixedBtnPane: true,
        btnsDef: {
            // Customizables dropdowns
            align: {
                dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ico: 'justifyLeft'
            },
            image: {
                dropdown: ['insertImage', 'upload', 'base64'],
                ico: 'insertImage'
            }
        },
        btns: ['viewHTML',
            '|', 'formatting',
            '|', 'btnGrp-test',
            '|', 'align',
            '|', 'btnGrp-lists',
            '|', 'image']
    });
    /** Simple customization with current options **/
    $('#form-content').trumbowyg({
        lang: 'fr',
        closable: true,
        mobile: true,
        fixedBtnPane: true,
        fixedFullWidth: true,
        semantic: true,
        resetCss: true,
        autoAjustHeight: true,
        autogrow: true
    });
    $('.editor').on('dblclick', function(e){
        $(this).trumbowyg({
            lang: 'fr',
            closable: true,
            fixedBtnPane: true
        });
    });
</script>
</body>
</html>