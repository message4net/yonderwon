<?php 

require '../libs/Smarty.class.php';

define('A', 'AAZ');

$smarty = new Smarty;
$smarty->assign('a','aaa');

$smarty->display('a.tpl');