<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 20:39
 */
namespace Admin\Controller;
use Think\Controller;
class SearchRepController extends Controller {
    public function index(){

        if($_SESSION['manager']) {

            if($_POST['keyword']){
                $_SESSION['searchRep'] = $_POST['keyword'];
                $info = $_SESSION['searchRep'];
                $rs1 = M("articles")->where("writer like '%$info%' and type=1")->select();
                $rs2 = M("articles")->where("title like '%$info%' and type=1")->select();
                $rs3 = M("articles")->where("content like '%$info%' and type=1")->select();

                if($rs1){

                    $count = M("articles")->where("writer like '%$info%' and type=1")->count();
                    $p = getpage($count,20);
                    $rs1 = M("articles")->where("writer like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                    $this->assign("rep",$rs1);

                }elseif($rs2){

                    $count = M("articles")->where("title like '%$info%' and type=1")->count();
                    $p = getpage($count,20);
                    $rs2 = M("articles")->where("title like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                    $this->assign("rep",$rs2);

                }elseif($rs3){

                    $count = M("articles")->where("content like '%$info%' and type=1")->count();
                    $p = getpage($count,20);
                    $rs3 = M("articles")->where("content like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                    $this->assign("rep",$rs3);

                }else{

                    $count = 0;
                    $p = getpage($count,1);
                    $rs4 = M("articles")->where("writer like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                    $this->assign("rep",$rs4);

                }

            }else{
                $judge = $_POST['judge'];
                if($judge){
                    $this->redirect("AdmReprint/index");
                }else{
                    if($_SESSION['searchRep']){
                        $info = $_SESSION['searchRep'];
                        $rs1 = M("articles")->where("writer like '%$info%' and type=1")->select();
                        $rs2 = M("articles")->where("title like '%$info%' and type=1")->select();
                        $rs3 = M("articles")->where("content like '%$info%' and type=1")->select();

                        if($rs1){

                            $count = M("articles")->where("writer like '%$info%' and type=1")->count();
                            $p = getpage($count,20);
                            $rs1 = M("articles")->where("writer like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                            $this->assign("rep",$rs1);

                        }elseif($rs2){

                            $count = M("articles")->where("title like '%$info%' and type=1")->count();
                            $p = getpage($count,20);
                            $rs2 = M("articles")->where("title like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                            $this->assign("rep",$rs2);

                        }elseif($rs3){

                            $count = M("articles")->where("content like '%$info%' and type=1")->count();
                            $p = getpage($count,20);
                            $rs3 = M("articles")->where("content like '%$info%' and type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

                            $this->assign("rep",$rs3);

                        }

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