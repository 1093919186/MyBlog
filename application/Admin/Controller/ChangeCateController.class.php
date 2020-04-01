<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 20:04
 */
namespace Admin\Controller;
use Think\Controller;
class ChangeCateController extends BaseController {
    public function index($cateId){

        if($_SESSION['manager']) {

            $rs1 = M("catelog")->where("cateId=$cateId")->find();
            $this->assign('cate', $rs1); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function update()
    {
        $cateid = $_POST['cateId'];

        $rs1 = M("catelog")->where("cateId=$cateid")->save($_POST);
        if($rs1){
            $this->success('update succeeded',__APP__."/AdmCate/index");
        }else{
            $this->success('update failed',__APP__."/ChangeCate/index");
        }
    }

}