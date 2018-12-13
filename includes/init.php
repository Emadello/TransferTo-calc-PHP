<?

	require_once 'db.php';
	require_once 'functions.php';

	$url = $_SERVER['REQUEST_URI']; //returns the current URL
	$parts = explode('/',$url);

	$lang = $parts[1];

	if ($lang == 'ar') require_once 'lang/ar.php';
	elseif ($lang == 'en') require_once 'lang/en.php';


?>
