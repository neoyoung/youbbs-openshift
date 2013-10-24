<?php
/**
 *程序官方支持社区 http://youbbs.sinaapp.com/
 *欢迎交流！
 *youBBS是开源项目，可自由修改，但要保留Powered by 链接信息
 *在 youBBS 的代码基础之上发布派生版本，名字可以不包含youBBS，
 *但是页脚需要带有 based on youBBS 的字样和链接。
 */

define('DADA_ROOT', $_ENV['OPENSHIFT_DATA_DIR']);

//数据库主机名或IP
$servername = $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
//数据库用户名
$dbusername = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME']; 
//数据库密码
$dbpassword = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']; 
//数据库名
$dbname = $_ENV['OPENSHIFT_APP_NAME']; 
//数据端口
$dbport = $_ENV['OPENSHIFT_MYSQL_DB_PORT'];

//MySQL字符集
$dbcharset = 'utf8';
//系统默认字符集
$charset = 'utf-8';

foreach($_ENV as $k=>$v){
    echo $k.': '.$v.'<br/>';
}

echo DADA_ROOT. ' - ' .$dbusername .' - '. $dbpassword.' '. $servername.' ' .$dbport . ' '. $dbname;
?>