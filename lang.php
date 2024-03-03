<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require get_language_file();
function get_language_file()
{
	$_SESSION['lang'] = $_SESSION['lang'] ?? 'en';
	$_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];


	return "assets/locale/".$_SESSION['lang'].".php";
}

function __($str, $str2)
{
	global $lang;
	if(!empty($lang[$str][$str2]))
	{
		return $lang[$str][$str2];
	}
	return $str2;
}
