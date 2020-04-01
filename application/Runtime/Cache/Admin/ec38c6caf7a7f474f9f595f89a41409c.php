<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BlogCMS</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/myblog/public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="/myblog/public/CSS/Admin/index.css">
    <script src="/myblog/public/JS/jquery-2.1.1.min.js"></script>
    <script src="/myblog/public/JS/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 style="text-align: center">Are you Mr.Ma?</h1>
            <div id="login">
                <form action="/myblog/admin.php/Index/checkLogin" method="post">
                    <div class="form-group">
                        <label>UserName</label>
                        <input class="form-control" placeholder="请输入用户名" style="font-family: '微软雅黑', '黑体'" name="userName">
                    </div>
                    <div class="form-group">
                        <label>PassWord</label>
                        <input class="form-control" placeholder="请输入密码" style="font-family: '微软雅黑', '黑体'" name="passWord">
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%">I'm Mr.Ma</button>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>