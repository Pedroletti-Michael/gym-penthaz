<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 27.01.2023
 * Description : Serve to redirect the user depending of his actions
 **/

//Start the session
session_start();

//Require all controller's files
require_once 'controllers/admin.php';
require_once 'controllers/view.php';
//TODO ENLEVER LE COMMENTAIRE CI-DESSOUS LORS DE LA MISE EN PROD
/**
if (empty($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] !== "on") {
	header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
	exit();
}*/

//Redirect the user request depending of his actions
if (isset($_GET['action'])) {
	$action = $_GET['action'];

	//Switch used to redirect different action
	switch ($action) {
		/**== Action to display login ==**/
		case 'login':
			displayLogin();
			break;

		/**== Action for login ==**/
		case 'requestLogin':
			login($_POST['inputEmail'], $_POST['inputPassword']);
			break;

		case 'addUser':
			addUser($_GET['usr'], $_GET['pwd']);
			break;

		/**== Action for log out of the web platform ==**/
		case 'logOut':
			logOut();
			break;

		case 'gallery':
			displayGallery();
			break;

		case 'dvd':
			displayDvd();
			break;

		/**== Action to display the admin panel ==**/
		case 'adminPanel':
			displayAdminPanel();
			break;

		/**== Action to display home ==**/
		case 'home':
		default:
			displayHome();
			break;
	}
} else {
	displayHome();
}