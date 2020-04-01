<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/11/28
 * Time: 10:37
 */

function uploadfile($path = './upload', $typeArr = array('jpg','png','gif')) {
     { // 判断文件夹是否存在
          if (! file_exists ( $path )) {
               mkdir ( $path );
          } else if (is_file ( $path ))
               mkdir ( $path );
     }

     foreach ( $_FILES as $key => $value ) {
          if (! is_array ( $value ['name'] )) {
               $new [] = $value;
          } else {
               foreach ( $value ['name'] as $k => $v ) {
                    $new [$k] ['name'] = $v;
                    $new [$k] ['type'] = $value ['type'] [$k];
                    $new [$k] ['tmp_name'] = $value ['tmp_name'] [$k];
                    $new [$k] ['error'] = $value ['error'] [$k];
                    $new [$k] ['size'] = $value ['size'] [$k];
               }
          }
     }
     $fileArrr = false;
     foreach ( $new as $k => $v ) {

          if ($v ['error'] == 0) {

               $ext = substr ( $v ['name'], strrpos ( $v ['name'], '.' ) + 1 );

               if (in_array ( $ext, $typeArr )) {
                    $newname = sha1 ( microtime () . mt_rand ( 1, 9999 ) ) . '.' . $ext;
                    $v ['name'] = $newname;
                    move_uploaded_file ( $v ['tmp_name'], $path . '/' . $newname );
                    $v ['tmp_name'] = $path . '/' . $newname;
                    $fileArrr [] = $v;
               } else {
                    return false;
               }
          }
     }

     return $fileArrr;
}

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