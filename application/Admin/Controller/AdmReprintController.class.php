<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 18:37
 */
namespace Admin\Controller;
use Think\Controller;
class AdmReprintController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $count = M("articles")->where("type=1")->count();
            $p = getpage($count,20);
            $rs1 = M("articles")->field("title,articleId,hints,origin")->where("type=1")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $this ->assign("articles",$rs1);
            $this->assign('page', $p->show()); // 赋值分页输出

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }

    public function del($articleId){

        $rs1 = M("articles")->field("imgPath")->where("articleId=$articleId")->find();
        $imgPath = $rs1['imgpath'];
        unlink($imgPath);

        $rs2 = M("articles")->where("articleId=$articleId")->delete();

        if($rs2){
            $this->success('delete succeeded',__APP__."/AdmReprint/index");
        }else{
            $this->success('delete failed',__APP__."/AdmReprint/index");
        }

    }

}