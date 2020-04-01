<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 20:09
 */
namespace Admin\Controller;
use Think\Controller;
class ChangeDiaController extends BaseController {
    public function index($diaryId){

        if($_SESSION['manager']) {

            $rs1 = M("diary")->where("diaryId=$diaryId")->find();

            $this->assign('diary', $rs1); // 赋值数据集

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }

    }

    public function update(){

        $title = $_POST['title'];
        $content = $_POST['simple-editor'];
        $diaryId = $_POST['diaryId'];
        $rs1 = M("diary")->execute("update diary set  title='$title',content='$content' where diaryId=$diaryId;");

        if($rs1){
            $this->success('Update succeeded',__APP__."/AdmDiary/index");
        }else{
            $this->success('Update failed',__APP__."/AdmDiary/index");
        }

    }

}