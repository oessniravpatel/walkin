<?php




 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 $whitelist = array('127.0.0.1', "::1");

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    // not valid
	define('DBHOST', 'internaluser.db.11797364.hostedresource.com');
	define('DBUSER', 'internaluser');
	define('DBPASS', 'Int3rnalP@ssword');
	define('DBNAME', 'internaluser');
}else{
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
<<<<<<< HEAD
	define('DBNAME', 'walkin');
=======
	define('DBNAME', 'interview');
>>>>>>> 8e4681e76fee823cd1bfec30f427d8b9ceafcb4f
}
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }



?>

