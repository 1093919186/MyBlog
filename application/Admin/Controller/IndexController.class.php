<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 19:55
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function checkLogin(){
        $userName = $_POST["userName"];
        $passWord = $_POST["passWord"];

        if($passWord){
            $result = M("admin")->where("userName='{$userName}' && passWord='{$passWord}'")->select();
            if($result)
            {
                $_SESSION['manager']=$_POST['userName'];
                $this->success("Login Succeeded",__APP__."/AdmReprint/index.html");
            }
            else
            {
                $this->success("Login Failed",__APP__."/Index/index.html");
            }
        } else {
            $this->success("Info is Empty",__APP__."/Index/index.html");
        }

    }

    public function out()
    {
        session_destroy();
        $this->success("Out Succeeded",__APP__."/Index/index.html");
    }

}