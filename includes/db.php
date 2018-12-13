<?
	$dbhost = "localhost"; // Host Name
	$dbport = "3306"; //Port
	$dbuser = "lifetime_calcphp"; // MySQL Database Username
	$dbpass = "calcphp@123"; // MySQL Database Password
	$dbname = "lifetime_calcphp"; // Database Name
	$db = new PDO("mysql:dbname={$dbname};host={$dbhost};port={$dbport};charset=utf8", $dbuser, $dbpass);
	$db->exec("set names utf8");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	date_default_timezone_set('Africa/Cairo');
?>
