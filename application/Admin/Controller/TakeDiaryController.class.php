<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/8
 * Time: 20:41
 */
namespace Admin\Controller;
use Think\Controller;
class TakeDiaryController extends BaseController {
    public function index(){

        if($_SESSION['manager']) {

            $this->display();
        }else{
            $this->success('Not logged in',__APP__."/Index/index");
        }
    }

    public function takedia(){

        $title = $_POST['title'];
        $content = $_POST['simple-editor'];
        $rs1 = M("diary")->execute("insert into diary(title,content) values ('$title','$content')");

        if($rs1){
            $this->success('Add succeeded',__APP__."/AdmDiary/index");
        }else{
            $this->success('Add failed',__APP__."/AdmDiary/index");
        }

    }

}