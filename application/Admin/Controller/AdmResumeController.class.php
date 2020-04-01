<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 18:47
 */
namespace Admin\Controller;
use Think\Controller;
class AdmResumeController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $rs1 = M("resume")->find();
            $this->assign('resume', $rs1); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function update(){

        $signature = $_POST["signature"];
        $saying = $_POST["saying"];
        $writer = $_POST["writer"];
        $imgPath = $_FILES["imgPath"];
        $imgDescribe = $_POST["imgDescribe"];

        if($_FILES['imgPath']['name']){

            $oldImg = M("resume")->field("imgPath")->where("id=3")->find();
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
                $savePath = "public/picture/resumeImg/$fileName";
                //上传文件

                unlink($oldImg);

                $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
            }
            if($savePath!=null){
                $result = M("resume")->execute("update resume set  signature='$signature',saying='$saying',writer='$writer',imgDescribe='$imgDescribe',imgPath='$savePath' where id=3;");
            }else{
                $this->success("File failed",__APP__."/AdmResume/index.html");
            }
            if($result)
            {
                $this->success("Update succeeded",__APP__."/AdmResume/index.html");
            }
            else
            {
                $this->success("Update succeeded",__APP__."/AdmResume/index.html");
            }

        }else{

            $result = M("resume")->execute("update resume set  signature='$signature',saying='$saying',writer='$writer',imgDescribe='$imgDescribe' where id=3;");
            if($result)
            {
                $this->success("Update succeeded",__APP__."/AdmResume/index.html");
            }
            else
            {
                $this->success("Update succeeded",__APP__."/AdmResume/index.html");
            }
        }

    }

}