<?php
switch (APP_INF){
    case 'index':
        $_title='首页';
        break;
    case 'about':
        $_title='关于我们';
        break;
    case 'contact':
    case 'contact1':
    case 'contact2':
        $_title='联系我们';
        break;
}
//$_m=APP_INF;

$smarty->assign('title',$_title);
//$smarty->assign('m',$_m);
//$smarty->display(APP_INF.'.a'.POSTFIX_TPL);
$smarty->display(APP_INF.POSTFIX_TPL);