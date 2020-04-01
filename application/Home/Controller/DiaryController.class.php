<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 17:56
 */
namespace Home\Controller;
use Think\Controller;
class DiaryController extends BaseController {
    public function index(){

        $count = M("diary")->count();
        $p = getpage($count,20);
        $rs1 = M("diary")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();
        $rs2 = M("diary")->count();
        $rs3 = M("resume")->field("signature")->find();

        $this ->assign("diary",$rs1);
        $this ->assign("num",$rs2);
        $this ->assign("motto",$rs3);
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }
}