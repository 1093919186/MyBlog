<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
        $count = M("articles")->where("type=1")->count();
        $p = getpage($count,15);
        $rs1 = M("articles")->where("type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();
        $rs2 = M("admin")->find();

        $this ->assign("articles",$rs1);
        $this ->assign("self",$rs2);
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }
}