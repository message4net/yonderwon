<?php
class Init {
//	private $env_relpath_file_name=array(
//			'comm/cfg/init.cfg.php',
//			'comm/cfg/self.cfg.php',
//			'comm/int/init.inc.php'
//	);

/**
 *功能:构造函数，连接数据库
 */
	public function __construct(){
	    //echo 'aab<br/>';
		//$this->url_encode();
	}
///**
// * 加载app下初始cfg、inc
// */
//	public function init_app_env($app_name){
//		foreach ($this->env_relpath_file_name as $val){
//			if (file_exists(BASE_DIR.$app_name.'/'.$val) && !is_dir(BASE_DIR.$app_name.'/'.$val)){
//				require BASE_DIR.$app_name.'/'.$val;
//			}
//		}
//	}

	/*
	 * 打印日志
	 */
	
	public function logerr($logerr){
	    $_dir=BASE_DIR.'log/log.log';
	    error_log($logerr.'\r\n',3,$_dir);
	}
	
/**
	*功能:初始化app模版页面
	*参数:$app_name app的名称
	*返回:TRUE OR FALSE
	*/
	public function init_app($app_name='404',$app_tmplt_arr=array()) {
		//确认app参数路径非文件
		$app_runtime_path=BASE_DIR.NAME_PUBLIC.DS.$app_name;
		$app_tmplt_path=BASE_DIR.NAME_TMPLT.DS.$app_name;

		//判断模版是否在硬盘缓存，并确认模版版本，否创建缓存
		if (!is_dir($app_runtime_path)){
			if(file_exists($app_runtime_path)){
				unlink($app_runtime_path);
			}
			$this->copy_dir($app_tmplt_path.DS,$app_runtime_path.DS,$app_name,$app_tmplt_arr);
		} else {
		    if (!file_exists($app_runtime_path.DS.FILE_TMPLT_VRSN) || is_dir(($app_runtime_path.DS.FILE_TMPLT_VRSN)) || file_get_contents($app_runtime_path.DS.FILE_TMPLT_VRSN)!=VRSN_TMPLT) {
				$this->remove_directory($app_runtime_path);
				$this->copy_dir($app_tmplt_path.DS,$app_runtime_path.DS,$app_name,$app_tmplt_arr);
			}
		}
		
// 		if(file_exists($app_runtime_path.DS.APP_INF)){
// 		    //echo $app_runtime_path.DS.APP_INF.'#1';
// 		    $_file_content=file_get_contents($app_runtime_path.DS.APP_INF);
// 		}else{
// 		    //echo $app_runtime_path.DS.$app_name.POSTFIX_INF.'#2';
// 		    $_file_content=file_get_contents($app_runtime_path.DS.$app_name.POSTFIX_INF);
// 		}

		unset($app_runtime_path,$app_tmplt_path);
		
		//echo $_file_content;
	}

/**
 *功能:输出网页html内容
 *参数:$src 需要拷贝的文件夹绝对路径
 *	  $dst 目标拷贝的文件夹绝对路径
 *返回:网页html内容
 */
	public function print_html($html_arr=array(),$html_file_name=''){
//	public function print_html($html_file_name=''){
		if(!file_exists($html_file_name) || is_dir($html_file_name)){
			$html_file_name=BASE_DIR.NAME_PUBLIC.DIRECTORY_SEPARATOR.APP_404.DIRECTORY_SEPARATOR.FILE_TMPLT_404;
		}
		$html_content=file_get_contents($html_file_name);
		if ($html_arr) {
			foreach ($html_arr as $key=>$val) {
				$html_content=str_replace('{'.$key.'}', $val, $html_content);
			}
		}
		return $html_content;
	}
	
/**
	*功能:拷贝文件夹
	*参数:$src 需要拷贝的文件夹绝对路径
	*	  $dst 目标拷贝的文件夹绝对路径
	*返回:无
	*/
	public function copy_dir($src,$dst,$app_name='404',$app_tmplt_arr=array()) {
		$dir = opendir($src);
		@mkdir($dst);
		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($src.$file) ) {
					$this->copy_dir($src.$file.DS,$dst.$file.DS,$app_name,$app_tmplt_arr);
					continue;
				}else{
				    $html_content=file_get_contents($src.$file);
				    $html_content=str_replace('{URL_BASE}', URL_BASE, $html_content);
				    $html_content=str_replace('{APP_NAME}', $app_name, $html_content);
// 					if ($app_tmplt_arr){
// 						//echo $file.'#<br/>';
// 						foreach ($app_tmplt_arr as $key=>$val){
// 							//echo $key.'<br/>';
// 							$html_content=str_replace('{'.$key.'}', $val, $html_content);
// 						}
// 						file_put_contents($dst.$file, $html_content);
// 					}else{
// 						copy($src.$file,$dst.$file);
// 					}
					file_put_contents($dst.$file, $html_content);
				}
			}
		}
		closedir($dir);
	}

/**
 *功能:删除文件夹
 *参数:$dir 需要删除的文件夹绝对路径
 *返回:无
 */
	public function remove_directory($dir){
		if($handle=opendir("$dir")){
			while(false!==($item=readdir($handle))){
				if($item!="."&&$item!=".."){
					if(is_dir($dir.DIRECTORY_SEPARATOR.$item)){
						$this->remove_directory($dir.DIRECTORY_SEPARATOR.$item);
					}else{
						@unlink($dir.DIRECTORY_SEPARATOR.$item);
					}
				}
			}
			closedir($handle);
			@rmdir($dir);
		}
	}

/**
 *功能:解析url参数,并编码
 *参数:$url_para_arr url参数数组
 *返回:无
 */	
	public function load_conf_app($app_name) {
	    define('APP_DIR_BASE', BASE_DIR.$app_name.DS);
	    define('APP_DIR_CFG', APP_DIR_BASE.NAME_COMM.DS.NAME_CFG.DS);
	    define('APP_DIR_INC', APP_DIR_BASE.NAME_COMM.DS.NAME_INC.DS);
	    $this->load_conf_single(APP_DIR_CFG.FILE_CFG_INIT);
	    $this->load_conf_single(APP_DIR_CFG.FILE_CFG_SELF);
	    $this->load_conf_single(APP_DIR_CFG.FILE_CFG_REL);
	    $this->load_conf_single(APP_DIR_INC.FILE_INC_INIT);
	}

	/**
	 *功能:解析url参数,并编码
	 *参数:$url_para_arr url参数数组
	 *返回:无
	 */
	public function load_conf_single($file_name) {
	    if(file_exists($file_name)){
	        require $file_name;
	    }
	}
	
/**
	*功能:解析url参数,并编码
	*参数:$url_para_arr url参数数组
	*返回:无
	*/	
	public function url_encode(){
		//$_app_arr=explode('/', $_SERVER['PATH_INFO']);
        //global $APP_ARR;
		
//         if (is_numeric(array_search($_REQUEST['a'], $APP_ARR))) {
// 		    //echo 'a<br/>';
// 			$_app_name=$_REQUEST['a'];
// 		} else {
// 		    //echo 'b<br/>';
// 		    $_app_name='404';
// 		}

        //echo BASE_DIR.NAME_APP.DS.$_REQUEST['a'].DS;
        if($_REQUEST['a']!='' && is_dir(BASE_DIR.NAME_APP.DS.$_REQUEST['a'].DS)){
            //$tmpAppName=APP_NAME;
           // if(!defined(APP_NAME)){
            	define('APP_NAME', $_REQUEST['a']);
            //}
        }else{
            define('APP_NAME', '404');
        }


        if($_REQUEST['m']!=''){
        
            if(file_exists(BASE_DIR.NAME_TMPLT.DS.APP_NAME.DS.$_REQUEST['m'].POSTFIX_TPL)){
                define(APP_INF, $_REQUEST['m']);
            }else{
                define(APP_INF, NAME_INDEX);
            }
               
    	}else {
    	    define(APP_INF, NAME_INDEX);
    	}
	

		$this->load_conf_app(APP_NAME);
		
		$this->init_app(APP_NAME);
	}	
	
/**
	*功能:编码url参数key字典
	*参数:$url_para url参数key
	*返回:无
	*/
	public function para_encode($_url_para_arr=array(),$_arr_length=0,$_i_start=0,$_arr_return=array()){
		if ($_url_para_arr[$_i_start]){
			switch ($_url_para_arr[$_i_start]){
				case 'web':
					$_para_num=1;
					$_arr_key_start=($_i_start+$_para_num+1);
					if(($_i_start+$_para_num)<$_arr_length){
						$_arr_return[$_url_para_arr[$_i_start]]=$_url_para_arr[($_i_start+$_para_num)];
					}else{
						$_arr_return['web']='';
						$_arr_key_start=$_arr_length;
					}
					break;
				;;
				case 'a':
					$_para_num=2;
					$_arr_key_start=($_i_start+$_para_num+1);
					if($_arr_length>=$_arr_key_start){
						$_arr_return[$_url_para_arr[$_i_start]]=$_url_para_arr[($_i_start+$_para_num)];
					}else{
						$_arr_key_start=$_arr_length;
					}
					break;
				;;
				default:
					if (!isset($_arr_return['web'])){
						$_arr_return['web']=''; 
					}
					$_arr_key_start=$_arr_length; 
			}
			if ($_arr_key_start<$_arr_length){
				return $this->para_encode($_url_para_arr,$_arr_length,$_arr_key_start,$_arr_return);
			}else{
				return $_arr_return;
			}
		}
	}
	
}