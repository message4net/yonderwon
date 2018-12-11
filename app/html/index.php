<?php 

//switch ($_REQUEST['m']){
//    case 'edit':
$init->logerr(BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.$_REQUEST['f'].POSTFIX_HTML);
//error_log('BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.$_REQUEST['f'].POSTFIX_HTML',3,)
    	if($_REQUEST['f']=='') $_REQUEST['f']=NAME_INDEX;
    	if($_REQUEST['m']!='' && is_file(BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.$_REQUEST['f'].POSTFIX_HTML)){
//$init->logerr(1);
    		//header(location:BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.NAME_INDEX.POSTFIX_HTML);
    		require BASE_DIR.NAME_PUBLIC.DS.$_REQUEST['a'].DS.$_REQUEST['m'].DS.$_REQUEST['f'].POSTFIX_HTML;
    	}else{
//    		$init->logerr(2);
    		header('location:index.php?a=404');
    		//require_once dirname(dirname(__DIR__)).DS.'smarty'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'Smarty.class.php';
    		//
    		//$smarty=new Smarty();
    		//$smarty->setTemplateDir(BASE_DIR.NAME_TMPLT.DS.'404');
    		//$smarty->setCompileDir(BASE_DIR.NAME_PUBLIC.DS.'404');
    		////$smarty->assign('url_base',URL_BASE);
    		//
    		//require_once dirname(__DIR__).'/404/index.php';
    		
    	}
//        break;
//    default:
//    	header('location:index.php?a=404');
//    	//define(APP_NAME, '404');
//    	//require_once dirname(dirname(__DIR__)).DS.'smarty'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'Smarty.class.php';
//    	//
//    	//$smarty=new Smarty();
//    	//$smarty->setTemplateDir(BASE_DIR.NAME_TMPLT.DS.'404');
//    	//$smarty->setCompileDir(BASE_DIR.NAME_PUBLIC.DS.'404');
//    	////$smarty->assign('url_base',URL_BASE);
//    	//
//    	//require_once dirname(__DIR__).'/404/index.php';
//    	break;
//}

//$smarty->assign('title',APP_INF);
//$smarty->display(APP_INF.'.a'.POSTFIX_TPL);
//$smarty->display(APP_INF.POSTFIX_TPL);