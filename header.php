<?
	require_once './includes/init.php';
	global $lang, $pagetitle;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Calculator</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <?
	    if ($lang == 'ar') echo '<link href="/css/bootstrap-rtl.min.css" rel="stylesheet">';
	?>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

	    <div class="container">

	      <a class="navbar-brand" href="#">Calculator</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	    </div>
    </nav>
