<?php 

switch ($_REQUEST['m']){
    case 'edit':
    	if($_REQUEST['f']=='') $_REQUEST['f']=NAME_INDEX;
    	if(is_file(BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.$_REQUEST['f'].POSTFIX_HTML)){
    		require_once BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.NAME_INDEX.POSTFIX_HTML;
    	}else{

    		require_once dirname(dirname(__DIR__)).DS.'smarty'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'Smarty.class.php';
    		
    		$smarty=new Smarty();
    		$smarty->setTemplateDir(BASE_DIR.NAME_TMPLT.DS.'404');
    		$smarty->setCompileDir(BASE_DIR.NAME_PUBLIC.DS.'404');
    		//$smarty->assign('url_base',URL_BASE);
    		
    		require_once dirname(__DIR__).'/404/index.php';
    		
    	}
        break;
    default:
    	
    	require_once dirname(dirname(__DIR__)).DS.'smarty'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'Smarty.class.php';
    	
    	$smarty=new Smarty();
    	$smarty->setTemplateDir(BASE_DIR.NAME_TMPLT.DS.'404');
    	$smarty->setCompileDir(BASE_DIR.NAME_PUBLIC.DS.'404');
    	//$smarty->assign('url_base',URL_BASE);
    	
    	require_once dirname(__DIR__).'/404/index.php';
    	break;
}

//$smarty->assign('title',APP_INF);
//$smarty->display(APP_INF.'.a'.POSTFIX_TPL);
//$smarty->display(APP_INF.POSTFIX_TPL);