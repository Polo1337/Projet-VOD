<?php

function construire_url($dossier)
{
	return '' . htmlspecialchars($dossier) ;
}

$dossiers = array(
<<<<<<< HEAD
	'index.css',
	'pol/index2.css',
	'steven/index3.css',
  	'axel/index4.css'
=======
	'style.css',
	'style2.css',
	'style3.css',
  'style4.css'
>>>>>>> 002dd648dcecebfd252eabc5038b81305f5b35f5
);

$actuel = htmlspecialchars($_SERVER['PHP_SELF']);
$new_style = (isset($_GET['style'])) ? $_GET['style'] : '';
$cookie_style = (isset($_COOKIE['style'])) ? $_COOKIE['style'] : '';

if(in_array($new_style, $dossiers, true))
{
	setcookie('style', $new_style, time() + (365 * 24 * 3600), '/');
	$url = construire_url($new_style);
}

else if(in_array($cookie_style, $dossiers, true))
{
	$url = construire_url($cookie_style);
}
else
{
	$url = construire_url($dossiers[0]);
}
?>
