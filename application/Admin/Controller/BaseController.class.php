<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/8/18
 * Time: 9:45
 */
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){

        if($_SESSION['searchDia'])
        {
            unset($_SESSION['searchDia']);
        }
        if($_SESSION['searchNote'])
        {
            unset($_SESSION['searchNote']);
        }
        if($_SESSION['searchRep'])
        {
            unset($_SESSION['searchRep']);
        }

    }
}