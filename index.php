<?php
session_start();
//Maak db connectie
require_once 'config/config.php';
require_once 'config/dbconnect.php';
//Include de views
include 'views/head.php';
// include 'views/header.php';
//Maak de variabelen
/* date settings */
$month = (empty($_GET['month'])) ? '' : $_GET['month'];
$year = (empty($_GET['year'])) ? '' : $_GET['year'];
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
switch ($action) {
	case 'register_form':
		include 'views/register_form.php';
		break;
	case 'register':
		include 'models/register.php';
		break;
	case 'login_form':
		include 'views/login_form.php';
		break;
	case 'login':
		include 'models/login.php';
		break;
	case 'account':
		include 'views/account.php';
		break;
	case 'home':
		include 'views/home.php';
		break;
	case 'logout':
		include 'models/logout.php';
		break;
	case 'agenda':
		require 'models/select_events.php';
		include 'views/agenda.php';
		break;
	default:
		include 'views/home.php';
		break;
}
include 'views/footer.php';
