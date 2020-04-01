<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <title>博客后台管理系统</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/myblog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Admin/index.css">
    <script src="/myblog/public/JS/jquery-2.1.1.min.js"></script>
    <script src="/myblog/public/JS/bootstrap.min.js"></script>
    <style type="text/css">
        a:hover{
            cursor: pointer;
        }
    </style>
</head>
<script type="text/javascript">
    var index = 3;
    function changeTime()
    {
        document.getElementById("timeSpan").innerHTML = index;
        index--;
        if(index < 0){
            window.location = "<?php echo ($jumpUrl); ?>";
        }
        else{
            window.setTimeout("changeTime()",1000);
        }
    }
</script>

<body onload="changeTime()">

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 style="text-align: center">Operation Succeeded</h1>
            <div id="login">
                <h4 style="text-align: center"><?php echo ($message); ?></h4>
                <h4 style="text-align: center">The page will jump in&nbsp;<span id="timeSpan">3</span>&nbsp;seconds</h4>
                <h4 style="text-align: center">If not please &nbsp;<a href="<?php echo ($jumpUrl); ?>">click here</a></h4>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

</body>
</html>