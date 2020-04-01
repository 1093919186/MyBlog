<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 21:11
 */
namespace Admin\Controller;
use Think\Controller;
class AdmCateController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $rs1 = M("catelog")->select();
            $this->assign('cate', $rs1); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function del($cateId)
    {
        $rs1 = M("catelog")->where("cateId=$cateId")->delete();

        if($rs1){
            $this->success('delete succeeded',__APP__."/AdmCate/index");
        }else{
            $this->success('delete failed',__APP__."/AdmCate/index");
        }
    }

}