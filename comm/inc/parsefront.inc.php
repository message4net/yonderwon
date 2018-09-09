<?php
/** private
 功能:数据库的基础操作类
 **/
class parseFront{
    private $CONN="";//定义数据库连接变量
    
    /**
     *功能:构造函数，连接数据库
     */
    public function __construct(){
        $this->usedb(DB_HOST,DB_USER,DB_PASSWD,DB_NAME,DB_PORT);
    }
    
    /**
     * 功能:选择数据库
     * 参数:$dbhost,$dbuser,$dbpasswd,$dbname(数据库ip:端口,数据库用户,数据库密码,数据库名称)
     */
    public function usedb($dbhost,$dbuser,$dbpasswd,$dbname,$dbport){
        $this->CONN=new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$dbname,$dbuser,$dbpasswd);
        $this->CONN->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    
}