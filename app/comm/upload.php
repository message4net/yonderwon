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
$_tp=0;
$extensions = array("jpg","bmp","gif","png");
$_storage_dir_rel='imgs'.DS;
$_arr_tmp=array();
$_arr_tmp['res']=true;
$_sql_pre='delete from upload;';

if($_REQUEST['tp']==1){
    $_tp=1;
}

switch ($_tp){
    case 1:
        $extensions = array("txt");
        $_storage_dir_rel='txts'.DS;
        break;
}

$extension=pathInfo($_FILES['upload']['name'],PATHINFO_EXTENSION);

$md5_file=md5_file($_FILES['upload']['tmp_name']);
 
 if(in_array($extension,$extensions)){
     copy($_FILES['upload']['tmp_name'], BASE_DIR.NAME_PUBLIC.DS.'storage'.DS.$_storage_dir_rel.$md5_file.'.'.$extension);
     unlink($_FILES['upload']['tmp_name']);
 }else{
     $_arr_tmp['res']=flase;
 }
 
 //echo '<script>window.parent.CKEDITOR.tools.callFunction("'. $_REQUEST['ckCsrfToken'].'", comm/imgs/'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.', "");</script>';

//  $_arr_tmp=array('uploaded'=>1,
//      'fileName'=>$md5_file.'.'.$extension,
//      'url'=>'storage/'.$md5_file.'.'.$extension
    
//  );
 if ($_arr_tmp['res']){
     $_arr_tmp['msg']=$md5_file.'.'.$extension;
     $_arr_tmp['url']='storage/'.$md5_file.'.'.$extension;
 }

 
//  $_arr_tmp=array('res'=>true,
//      'msg'=>$md5_file.'.'.$extension,
//      'url'=>'storage/'.$md5_file.'.'.$extension
 
//  );
 
 
 //$_str=$_FILES['upload']['tmp_name'].':{"uploaded":1,"fileName":"'.$md5_file.'.'.$extension.'","url":"'.'comm/imgs/'.$md5_file.'.'.$extension.'"}'."\r\n";
 //logerr($_str);
 
 //echo '{"uploaded":1,"fileName":"'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.'","url":"'.'comm/imgs/'.md5_file($_FILES['upload']['tmp_name']).'.'.$extension.'"}';
 
$_dir=BASE_DIR.'log/log.log';
//error_log('b:'.$_FILES['upload']['tmp_name'].':'.BASE_DIR.NAME_PUBLIC.DS.'storage'.DS.$md5_file.'.'.$extension."\r\n",3,$_dir);
 
echo json_encode($_arr_tmp);
 //return '{"uploaded":1,"fileName":"'.$md5_file.'.'.$extension.'","url":"'.'comm/imgs/'.$md5_file.'.'.$extension.'"}';