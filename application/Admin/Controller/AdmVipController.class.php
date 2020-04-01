<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 18:52
 */
namespace Admin\Controller;
use Think\Controller;
class AdmVipController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $rs1 = M("admin")->find();
            $this->assign('admin', $rs1); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }

    public function update(){

        $userName = $_POST["userName"];
        $passWord = $_POST["passWord"];
        $indexSign = $_POST["indexSign"];
        $imgPath = $_FILES["imgPath"];
        $email = $_POST["email"];
        $sex = $_POST["sex"];
        $wechat = $_POST["wechat"];
        $school = $_POST["school"];

        if($_FILES['imgPath']['name']){
            $oldImg = M("admin")->field("imgPath")->where("id=2")->find();
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
                $savePath = "public/picture/indexIcon/$fileName";
                //上传文件

                unlink($oldImg);

                $bool=move_uploaded_file($imgPath["tmp_name"],"{$savePath}");  //注意修改权限
            }
            if($savePath!=null){
                $result = M("admin")->execute("update admin set  userName='$userName',passWord='$passWord',indexSign='$indexSign',email='$email',sex='$sex',wechat='$wechat',school='$school',imgPath='$savePath' where id=2;");
            }else{
                $this->success("File failed",__APP__."/AdmVip/index.html");
            }
            if($result)
            {
                $this->success("Update succeeded",__APP__."/AdmVip/index.html");
            }
            else
            {
                $this->success("Update succeeded",__APP__."/AdmVip/index.html");
            }
        }else{

            $result = M("admin")->execute("update admin set  userName='$userName',passWord='$passWord',indexSign='$indexSign',email='$email',sex='$sex',wechat='$wechat',school='$school' where id=2;");
            if($result)
            {
                $this->success("Update succeeded",__APP__."/AdmVip/index.html");
            }
            else
            {
                $this->success("Update succeeded",__APP__."/AdmVip/index.html");
            }
        }

    }

}