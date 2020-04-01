<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/18
 * Time: 13:58
 */
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){

        if($_SESSION['seainDia'])
        {
            unset($_SESSION['seainDia']);
        }
    }
}