<?php
switch (APP_INF){
    case 'index':
        $_title='首页';
        break;
    case 'about':
        $_title='关于我们';
        break;
    case 'contact':
        $_title='联系我们';
        break;
}

$smarty->assign('title',$_title);
//$smarty->display(APP_INF.'.a'.POSTFIX_TPL);
$smarty->display(APP_INF.POSTFIX_TPL);