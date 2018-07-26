<?php
define('DBHost', '127.0.0.1');
define('DBName', 'codilar');
define('DBUser', 'root');
define('DBPassword', '');
require(dirname(__FILE__)."/PDO.class.php");
$DB = new Db(DBHost, DBName, DBUser, DBPassword);


define("BASE_URL", "http://localhost/codilar/"); 
define("ASSETS_URL", BASE_URL."assets/"); 

?>
