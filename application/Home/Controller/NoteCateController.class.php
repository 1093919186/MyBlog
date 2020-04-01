<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/11
 * Time: 11:01
 */
namespace Home\Controller;
use Think\Controller;
class NoteCateController extends BaseController {
    public function index($cateId){
        $rs1 = M("catelog")->select();

        $count = M("articles")->where("type=0 and cateId=$cateId")->count();
        $p = getpage($count,20);
        $rs2 = M("articles")->where("type=0 and cateId=$cateId")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

        $rs3 = M("articles")->field("title,articleId")->where("type=0 and cateId=$cateId")->order("hints desc")->limit('4')->select();
        $rs4 = M("catelog")->field("cateName")->where("cateId=$cateId")->find();

        $this ->assign("cate",$rs1);
        $this ->assign("notes",$rs2);
        $this ->assign("recommand",$rs3);
        $this ->assign("catename",$rs4);
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }
}