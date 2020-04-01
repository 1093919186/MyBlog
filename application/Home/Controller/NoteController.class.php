<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 17:48
 */
namespace Home\Controller;
use Think\Controller;
class NoteController extends BaseController {
    public function index(){
        $rs1 = M("catelog")->select();

        $count = M("articles")->where("type=0")->count();
        $p = getpage($count,20);
        $rs2 = M("articles")->where("type=0")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

        $rs3 = M("articles")->field("title,articleId")->where("type=0")->limit('4')->order("hints desc")->select();

        $this ->assign("cate",$rs1);
        $this ->assign("content",$rs2);
        $this ->assign("recommand",$rs3);
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }
}