<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/11/28
 * Time: 10:37
 */

function getpage($count, $pagesize = 10) {
     $p = new Think\Page($count, $pagesize);
     $p->rollPage=5;
     $p->setConfig('header', '<li class="rows">第%NOW_PAGE%页/共%TOTAL_PAGE%页</li>');
     $p->setConfig('prev', '&lsaquo;');
     $p->setConfig('next', '&rsaquo;');
     $p->setConfig('end', 'end');
     $p->setConfig('first', 'first');
     $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
     $p->lastSuffix = false;//最后一页不显示为总页数
     return $p;
}