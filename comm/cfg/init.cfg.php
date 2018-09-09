<?php

define('DS',DIRECTORY_SEPARATOR);
//定义起始路径
define('BASE_DIR',dirname(dirname(__DIR__)).DS);

//定义常参
define('NAME_COMM', 'comm');
define('NAME_INC', 'inc');
define('NAME_CFG', 'cfg');

require BASE_DIR.NAME_COMM.DS.NAME_CFG.DS.'self.cfg.php';
require BASE_DIR.NAME_COMM.DS.NAME_CFG.DS.'rel.cfg.php';
require BASE_DIR.NAME_COMM.DS.NAME_INC.DS.'init.inc.php';
require BASE_DIR.NAME_COMM.DS.NAME_INC.DS.'dbpdo.inc.php';

$APP_ARR=array(
    'yonderwon',
    '404'
);
define('NAME_PUBLIC', 'public');
define('NAME_INDEX', 'index');
define('POSTFIX_HTML', '.html');

define('POSTFIX_PHP', '.php');
define('POSTFIX_TPL', '.tpl');

define('NAME_APP', 'app');
define('NAME_MDL', 'mdl');
define('NAME_TMPLT', 'tmplt');
//define('NAME_RUNTIME', 'runtime');

define('NAME_LOG', 'log');

define('POSTFIX_MDL', '.mdl.php');
define('POSTFIX_INC', '.inc.php');
define('INC_DBPDO', 'dbpdo');
define('VRSN_TMPLT','0.0.1');
//define('APP_404', '404');
//define('APP_OPS', 'ops');
define('FILE_INF', 'index.php');
define('FILE_RTJS', 'rtjs.php');
define('FILE_LOG', 'log.log');
//define('FILE_ROUTER', 'router.php');
define('FILE_INC_INIT', 'init.inc.php');
define('FILE_CFG_INIT', 'init.cfg.php');
define('FILE_CFG_SELF', 'self.cfg.php');
define('FILE_CFG_REL', 'rel.cfg.php');
define('FILE_TMPLT_404', '404.html');
define('FILE_TMPLT_VRSN', '.vrsn');




define('PERPAGENO','5');
define('PERROWNO','4');
define('PERMENUNO','5');

//定义app ops配置
define('OPS_MDL_MAIN', 'main');
define('OPS_FUNC_MENU', 'menu');
define('OPS_FUNC_VIEW', 'view');
define('OPS_FUNC_MAIN', 'main');
define('OPS_FUNC_SEARCH', 'search');
define('OPS_FUNC_MENUSUB', 'menusub');
define('OPS_INC_RETURN', 'return');
define('OPS_INC_VIEW', 'view');
define('OPS_INC_MAIN', 'main');
define('OPS_SQL_VIEW', 'vwsql');
define('OPS_FILE_TMPLT', 'index.html');
define('OPS_TIP_FAIL', '<span style="color:yellow"><b>失败</b></span>,');

$html_e['ops']['tr']['ra']='ra_';
$html_e['ops']['tr']['rb']='rb_';
$html_e['ops']['tr']['rc']='rc_';
$html_e['ops']['td']['suffix']='da_';
$html_e['ops']['td']['a']='a_';
$html_e['ops']['td']['b']='b_';
$html_e['ops']['td']['c']='c_';

$html_tmplt_arr['ops']['title']='ops_sys';
$html_tmplt_arr['ops']['logo']='ops_sys';
$html_tmplt_arr['ops']['nodis']='none';
$html_tmplt_arr['ops']['dis']='inline';
$html_tmplt_arr['ops']['sapn_info']='';
$html_tmplt_arr['ops']['menu_nav']='';

