<?php 
require 'comm'.DIRECTORY_SEPARATOR.'cfg'.DIRECTORY_SEPARATOR.'init.cfg.php';


//echo $_REQUEST['a'].'q<br/>';
$init=new Init();
$db=new DbSqlPdo();
$init->url_encode();

//echo $_REQUEST['a'];
if($_REQUEST['a']!='html'){
	require 'smarty'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'Smarty.class.php';
	
	$smarty=new Smarty();
	$smarty->setTemplateDir(BASE_DIR.NAME_TMPLT.DS.APP_NAME);
	$smarty->setCompileDir(BASE_DIR.NAME_PUBLIC.DS.APP_NAME);
	//$smarty->assign('url_base',URL_BASE);
}

require NAME_APP.DS.APP_NAME.DS.NAME_INDEX.POSTFIX_PHP;

