<?php 
$_common_css_banner='banner banner1';
switch (APP_INF){
    case 'index':
        $_common_css_banner='banner';
        break;
}

$smarty->assign('title',APP_INF);
//$smarty->display(APP_INF.'.a'.POSTFIX_TPL);
$smarty->display(APP_INF.POSTFIX_TPL);