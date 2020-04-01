<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 19:17
 */
namespace Home\Controller;
use Think\Controller;
class ResumeController extends BaseController {
    public function index(){
        $rs1 = M("resume")->find();

        $this ->assign("resume",$rs1);

        $this->display();
    }
}