<?php 

require 'db.php';
require 't.php';

class core {
   public function __construct() {
		session_start();

		new db;
		new t;
   }
}

// 
$core = new core;
$site = mysqli_fetch_array(db::query("select * from `site` where id = 1"));

// lang
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
	if ($lang == 'kz') $_SESSION['lang'] = 'kz';
	else $_SESSION['lang'] = 'ru';
}
if (isset($_SESSION['lang'])) {
	$lang = $_SESSION['lang'];
} else {
	$lang = 'ru';
	$_SESSION['lang'] = 'ru';
}