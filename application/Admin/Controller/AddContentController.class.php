<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 22:25
 */
namespace Admin\Controller;
use Think\Controller;
class AddContentController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $rs1 = M("catelog")->select();

            $this->assign('cate', $rs1); // 赋值数据集
            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function add(){

        $title = $_POST['title'];
        $writer = $_POST['writer'];
        $header = $_POST['header'];
        $content = $_POST['simple-editor'];
        $origin = $_POST['origin'];
        $link = $_POST['link'];
        $type = $_POST['type'];
        $imgPath = $_FILES["imgPath"];

        if($type=='转载'){

            if($_FILES['imgPath']['name']){

                //1、上传文件
                $savePath = NULL;
                if($imgPath["name"] != NULL)
                {
                    //原文件名 xxxx.txt.jpg
                    $oldFileName = $imgPath["name"];
                    //截取文件扩展名
                    $index = strrpos($oldFileName,".");
                    $ext = substr($oldFileName,$index);
                    //生成一个新文件名
                    $fileName = uniqid().$ext;
                    //保存路径
                    $savePath = "public/picture/artImg/$fileName";
                    //上传文件

                    $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
                }

                if($savePath!=null){
                    $result = M("articles")->execute("insert into articles(title,writer,header,imgPath,content,cateId,type,origin,link) values('$title','$writer','$header','$savePath','$content','3','1','$origin','$link')");
                }else{
                    $this->success("File failed",__APP__."/AddContent/index.html");
                }
                if($result)
                {
                    $this->success("Add succeeded",__APP__."/AdmReprint/index.html");
                }
                else
                {
                    $this->success("Add failed",__APP__."/AddContent/index.html");
                }

            }else{

                $result = M("articles")->execute("insert into articles(title,writer,header,content,cateId,type,origin,link) values('$title','$writer','$header','$content','3','1','$origin','$link')");
                if($result)
                {
                    $this->success("Add succeeded",__APP__."/AdmReprint/index.html");
                }
                else
                {
                    $this->success("Add failed",__APP__."/AddContent/index.html");
                }
            }

        }else{

            $cateId = M("catelog")->field("cateId")->where("cateName='$type'")->find();
            $cateId = $cateId['cateid'];

            if($_FILES['imgPath']['name']){

                //1、上传文件
                $savePath = NULL;
                if($imgPath["name"] != NULL)
                {
                    //原文件名 xxxx.txt.jpg
                    $oldFileName = $imgPath["name"];
                    //截取文件扩展名
                    $index = strrpos($oldFileName,".");
                    $ext = substr($oldFileName,$index);
                    //生成一个新文件名
                    $fileName = uniqid().$ext;
                    //保存路径
                    $savePath = "public/picture/artImg/$fileName";
                    //上传文件

                    $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
                }

                if($savePath!=null){
                    $result = M("articles")->execute("insert into articles(title,writer,header,imgPath,content,cateId,type,origin,link) values('$title','$writer','$header','$savePath','$content','$cateId','0','$origin','$link')");
                }else{
                    $this->success("File failed",__APP__."/AddContent/index.html");
                }
                if($result)
                {
                    $this->success("Add succeeded",__APP__."/AdmNote/index.html");

                    $artNums=M("catelog")->where("cateId=$cateId")->find();
                    $artNums=$artNums["articlenums"]+1;
                    M("catelog")->where("cateId=$cateId")->save(array(
                        'articleNums'=>"$artNums"
                    ));

                }
                else
                {
                    $this->success("Add failed",__APP__."/AddContent/index.html");
                }

            }else{

                $result = M("articles")->execute("insert into articles(title,writer,header,content,cateId,type,origin,link) values('$title','$writer','$header','$content','$cateId','0','$origin','$link')");
                if($result)
                {
                    $this->success("Add succeeded",__APP__."/AdmNote/index.html");

                    $artNums=M("catelog")->where("cateId=$cateId")->find();
                    $artNums=$artNums["articlenums"]+1;
                    M("catelog")->where("cateId=$cateId")->save(array(
                        'articleNums'=>"$artNums"
                    ));

                }
                else
                {
                    $this->success("Add failed",__APP__."/AddContent/index.html");
                }
            }

        }

    }

}