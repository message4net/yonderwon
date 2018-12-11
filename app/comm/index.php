<?php 
//$_message='#';
//$_dir=BASE_DIR.'log/log.log';

// foreach ($_REQUEST as $k=>$v){
//     $_message.=$k.'     #{K}#     '.$v."    #{V}#    \r\n";
// }


// foreach ($_FILES as $k=>$v){
//     //$_message.=$k.'     #{K}#     '.$v."    #{V}#    \r";
//     foreach ($v as $k1=>$v1){
//         $_message='#k:'.$k1.'#v'.$v1."\n";
//         error_log($_message,3,$_dir);
//     }
// }

//error_log($_message,3,$_dir);

switch ($_REQUEST['m']){
    case 'upl':
        //require 'img_upl.php';
        require 'upload.php';
        break;
    default:
        header("Location: index.php");
        exit;
        break;
}