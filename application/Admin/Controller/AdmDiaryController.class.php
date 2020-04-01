<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/7
 * Time: 22:39
 */
namespace Admin\Controller;
use Think\Controller;
class AdmDiaryController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $count = M("diary")->count();
            $p = getpage($count,20);

            $rs1 = M("diary")->order("dateandtime desc")->limit($p->firstRow, $p->listRows)->select();
            $this->assign('diary', $rs1); // 赋值数据集
            $this->assign('page', $p->show()); // 赋值分页输出

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function del($diaryId){

        $rs1 = M("diary")->where("diaryId=$diaryId")->delete();

        if($rs1){
            $this->success('delete succeeded',__APP__."/AdmDiary/index");
        }else{
            $this->success('delete failed',__APP__."/AdmDiary/index");
        }

    }

}