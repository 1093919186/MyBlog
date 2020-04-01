<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/9
 * Time: 21:01
 */
namespace Home\Controller;
use Think\Controller;
class ContentDetController extends BaseController {
    public function index($articleId){
        $type = M("articles")->field("type")->where("articleid=$articleId")->find();
        $cate = M("articles")->field("cateId")->where("articleid=$articleId")->find();
        $type = $type['type'];
        $cate = $cate['cateid'];

        $rs1 = M("catelog")->select();
        $rs2 = M("articles")->where("articleId=$articleId")->find();

        if($type==1){
            $rs3 = M("articles")->field("title,articleId")->where("type=$type and not articleId=$articleId")->limit('4')->order("hints desc")->select();
        }else{
            $rs3 = M("articles")->field("title,articleId")->where("type=$type and cateId=$cate and not articleId=$articleId")->limit('4')->order("hints desc")->select();
        }

        $hints=M("articles")->where("articleId=$articleId")->find();
        $hints=$hints["hints"]+1;
        M("articles")->where("articleId=$articleId")->save(array(
            'hints'=>"$hints"
        ));

        $this ->assign("cate",$rs1);
        $this ->assign("content",$rs2);
        $this ->assign("recommand",$rs3);

        $this->display();
    }
}