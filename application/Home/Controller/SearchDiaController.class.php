<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 20:30
 */
namespace Home\Controller;
use Think\Controller;
class SearchDiaController extends Controller {
    public function index(){

        if($_POST['keyword']){
            $_SESSION['seainDia'] = $_POST['keyword'];
            $info = $_SESSION['seainDia'];
            $count = M("diary")->where("title like '%$info%'")->count();
            $p = getpage($count,20);
            $rs1 = M("diary")->where("title like '%$info%'")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $this->assign("diary",$rs1);
        }else{
            $judge = $_POST['judge'];
            if($judge){
                $this->redirect("Diary/index");
            }else{
                if($_SESSION['seainDia']){
                    $info = $_SESSION['seainDia'];
                    $count = M("diary")->where("title like '%$info%'")->count();
                    $p = getpage($count,20);
                    $rs1 = M("diary")->where("title like '%$info%'")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                    $this->assign("diary",$rs1);
                }
            }
        }

        $rs2 = M("diary")->count();
        $rs3 = M("resume")->field("signature")->find();

        $this ->assign("num",$rs2);
        $this ->assign("motto",$rs3);
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }
}