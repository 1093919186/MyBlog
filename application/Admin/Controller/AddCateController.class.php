<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 20:58
 */
namespace Admin\Controller;
use Think\Controller;
class AddCateController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {
            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function add()
    {
        $result = M("catelog")->add($_POST);
        if($result>0){
            $this->success('Add succeeded',__APP__."/AdmCate/index");
        }else{
            $this->success('Add failed',__APP__."/AddCate/index");
        }
    }

}