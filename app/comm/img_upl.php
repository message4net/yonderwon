<?php
/*
 * #upload     #{K}#     Array    #{V}#  
 * #k:name#v2.jpg
    #k:type#vimage/jpeg
    #k:tmp_name#v/Applications/MAMP/tmp/php/phpfh9Otr
    #k:error#v0
    #k:size#v37389

 * 
 * 
 */

$extensions = array("jpg","bmp","gif","png");  

$extension=pathInfo($_FILES['upload']['name'],PATHINFO_EXTENSION);

$md5_file=md5_file($_FILES['upload']['tmp_name']);
 
 if(in_array($extension,$extensions)){
     copy($_FILES['upload']['tmp_name'], BASE_DIR.NAME_PUBLIC.DS.'storage'.DS.$md5_file.'.'.$extension);
     unlink($_FILES['upload']['tmp_name']);
 }
 
 //echo '<script>window.parent.CKEDITOR.tools.callFunction("'. $_REQUEST['ckCsrfToken'].'", comm/imgs/'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.', "");</script>';

//  $_arr_tmp=array('uploaded'=>1,
//      'fileName'=>$md5_file.'.'.$extension,
//      'url'=>'storage/'.$md5_file.'.'.$extension
    
//  );

 
 $_arr_tmp=array('res'=>true,
     'msg'=>$md5_file.'.'.$extension,
     'url'=>'storage/'.$md5_file.'.'.$extension
 
 );
 
 
 //$_str=$_FILES['upload']['tmp_name'].':{"uploaded":1,"fileName":"'.$md5_file.'.'.$extension.'","url":"'.'comm/imgs/'.$md5_file.'.'.$extension.'"}'."\r\n";
 //logerr($_str);
 
 //echo '{"uploaded":1,"fileName":"'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.'","url":"'.'comm/imgs/'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.'"}';
 
$_dir=BASE_DIR.'log/log.log';
error_log('b:'.$_FILES['upload']['tmp_name'].':'.BASE_DIR.NAME_PUBLIC.DS.'storage'.DS.$md5_file.'.'.$extension."\r\n",3,$_dir);
 
echo json_encode($_arr_tmp);
 //return '{"uploaded":1,"fileName":"'.$md5_file.'.'.$extension.'","url":"'.'comm/imgs/'.$md5_file.'.'.$extension.'"}';