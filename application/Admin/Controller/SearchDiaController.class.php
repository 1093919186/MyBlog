<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 20:22
 */
namespace Admin\Controller;
use Think\Controller;
class SearchDiaController extends Controller {
    public function index(){

        if($_SESSION['manager']) {

            if($_POST['keyword']){
                $_SESSION['searchDia'] = $_POST['keyword'];
                $info = $_SESSION['searchDia'];
                $count = M("diary")->where("title like '%$info%'")->count();
                $p = getpage($count,20);
                $rs1 = M("diary")->where("title like '%$info%'")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                $this->assign("diary",$rs1);
            }else{
                $judge = $_POST['judge'];
                if($judge){
                    $this->redirect("AdmDiary/index");
                }else{
                    if($_SESSION['searchDia']){
                        $info = $_SESSION['searchDia'];
                        $count = M("diary")->where("title like '%$info%'")->count();
                        $p = getpage($count,20);
                        $rs1 = M("diary")->where("title like '%$info%'")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                        $this->assign("diary",$rs1);
                    }
                }
            }

            $this->assign('page', $p->show()); // 赋值分页输出
            $this->display();

        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }
}