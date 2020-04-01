<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 20:38
 */
namespace Home\Controller;
use Think\Controller;
class SearchNotController extends Controller {
    public function index(){
        $info = $_GET['keyword'];

        $rs1 = M("articles")->where("writer like '%$info%' and type=0")->select();
        $rs2 = M("articles")->where("title like '%$info%' and type=0")->select();
        $rs3 = M("articles")->where("content like '%$info%' and type=0")->select();
        $rs4 = M("catelog")->select();

        if($info==''){
            $this->redirect("Note/index");
        }elseif($rs1){

            $count = M("articles")->where("writer like '%$info%' and type=0")->count();
            $p = getpage($count,20);
            $rs1 = M("articles")->where("writer like '%$info%' and type=0")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $rs5 = M("articles")->field("title,articleId")->where("writer like '%$info%' and type=0")->limit('4')->order("hints desc")->select();
            $this->assign("recommand",$rs5);
            $this->assign("notes",$rs1);
            $this->assign('page', $p->show()); // 赋值分页输出
        }elseif($rs2){

            $count = M("articles")->where("title like '%$info%' and type=0")->count();
            $p = getpage($count,20);
            $rs2 = M("articles")->where("title like '%$info%' and type=0")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $rs5 = M("articles")->field("title,articleId")->where("title like '%$info%' and type=0")->limit('4')->order("hints desc")->select();
            $this->assign("recommand",$rs5);
            $this->assign("notes",$rs2);
            $this->assign('page', $p->show()); // 赋值分页输出
        }elseif($rs3){

            $count = M("articles")->where("content like '%$info%' and type=0")->count();
            $p = getpage($count,20);
            $rs3 = M("articles")->where("content like '%$info%' and type=0")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $rs5 = M("articles")->field("title,articleId")->where("content like '%$info%' and type=0")->limit('4')->order("hints desc")->select();
            $this->assign("recommand",$rs5);
            $this->assign("notes",$rs3);
            $this->assign('page', $p->show()); // 赋值分页输出
        }else{
            $this->assign("recommand",'');
            $this->assign("notes",'');
        }

        $this->assign("cate",$rs4);

        $this->display();
    }
}