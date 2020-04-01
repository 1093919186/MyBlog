<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 18:43
 */
namespace Admin\Controller;
use Think\Controller;
class AdmNoteController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $count = M("articles")->where("type=0")->count();
            $p = getpage($count,20);
            $rs1 = M("articles")->field("title,articleId,hints,writer")->where("type=0")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();

            $this ->assign("articles",$rs1);
            $this->assign('page', $p->show()); // 赋值分页输出

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }

    public function del($articleId){


        $rs1 = M("articles")->field("imgPath,cateId")->where("articleId=$articleId")->find();
        $imgPath = $rs1['imgpath'];
        $cateId = $rs1['cateid'];
        unlink($imgPath);

        $rs2 = M("articles")->where("articleId=$articleId")->delete();

        if($rs2){
            $this->success('delete succeeded',__APP__."/AdmNote/index");

            $artNums=M("catelog")->where("cateId=$cateId")->find();
            $artNums=$artNums["articlenums"]-1;
            M("catelog")->where("cateId=$cateId")->save(array(
                'articleNums'=>"$artNums"
            ));

        }else{
            $this->success('delete failed',__APP__."/AdmNote/index");
        }

    }

}