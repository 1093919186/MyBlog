<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 19:13
 */
namespace Admin\Controller;
use Think\Controller;
class ChangeArtController extends BaseController {
    public function index($articleId){

        if($_SESSION['manager']) {

            $rs1 = M("articles")->where("articleId=$articleId")->find();

            $type = $rs1['type'];
            if($type==1){
                $this->assign('reprint', 1); // 赋值数据集
            }else{
                $cate = $rs1['cateid'];
                $this->assign('ty', $cate); // 赋值数据集
            }

            $rs2 = M("catelog")->select();

            $this->assign('art', $rs1); // 赋值数据集
            $this->assign('cate', $rs2); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }

    public function update(){

        $title = $_POST['title'];
        $writer = $_POST['writer'];
        $header = $_POST['header'];
        $content = $_POST['simple-editor'];
        $origin = $_POST['origin'];
        $link = $_POST['link'];
        $type = $_POST['type'];
        $imgPath = $_FILES["imgPath"];
        $articleId = $_POST['articleId'];

        if($type=='转载'){

            if($_FILES['imgPath']['name']){

                $oldImg = M("articles")->field("imgPath")->where("articleId=$articleId")->find();
                $oldImg = $oldImg['imgpath'];

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

                    unlink($oldImg);

                    $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
                }

                if($savePath!=null){
                    $result = M("articles")->execute("update articles set  title='$title',writer='$writer',header='$header',content='$content',imgPath='$savePath',origin='$origin',link='$link',type='1',cateId='3' where articleId=$articleId;");
                }else{
                    $this->success("File failed",__APP__."/ChangeArt/index.html");
                }
                if($result)
                {
                    $this->success("Update succeeded",__APP__."/AdmReprint/index.html");
                }
                else
                {
                    $this->success("Update failed",__APP__."/ChangeArt/index.html");
                }

            }else{

                $result = M("articles")->execute("update articles set  title='$title',writer='$writer',header='$header',content='$content',origin='$origin',link='$link',type='1',cateId='3' where articleId=$articleId;");
                if($result)
                {
                    $this->success("Update succeeded",__APP__."/AdmReprint/index.html");
                }
                else
                {
                    $this->success("Update failed",__APP__."/ChangeArt/index.html");
                }
            }

        }else{

            $cateId = M("catelog")->field("cateId")->where("cateName='$type'")->find();
            $cateId = $cateId['cateid'];

            if($_FILES['imgPath']['name']){

                $oldImg = M("articles")->field("imgPath")->where("articleId=$articleId")->find();
                $oldImg = $oldImg['imgpath'];

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

                    unlink($oldImg);

                    $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
                }

                if($savePath!=null){
                    $result = M("articles")->execute("update articles set  title='$title',writer='$writer',header='$header',content='$content',imgPath='$savePath',origin='$origin',link='$link',type='0',cateId='$cateId' where articleId=$articleId;");
                }else{
                    $this->success("File failed",__APP__."/ChangeArt/index.html");
                }
                if($result)
                {
                    $this->success("Update succeeded",__APP__."/AdmNote/index.html");
                }
                else
                {
                    $this->success("Update failed",__APP__."/ChangeArt/index.html");
                }

            }else{

                $result = M("articles")->execute("update articles set  title='$title',writer='$writer',header='$header',content='$content',origin='$origin',link='$link',type='0',cateId='$cateId' where articleId=$articleId;");
                if($result)
                {
                    $this->success("Update succeeded",__APP__."/AdmNote/index.html");
                }
                else
                {
                    $this->success("Update failed",__APP__."/ChangeArt/index.html");
                }
            }

        }



    }

}