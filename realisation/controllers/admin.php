<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 06.05.2021
 * Description : This controller file will contains all function related to users
 **/

require_once 'view.php';

/**
 * Function used to connect a user to the website
 * @param mixed $userMail -> Email used by the user to connect
 * @param mixed $pwd -> Password
 * @return void
 */
function login($usrMail, $pwd)
{
	if ($usrMail != '' && $pwd != '') {
		require_once 'models/users.php';

		$return = checkLogin($usrMail, $pwd);
		if ($return != false) {
			createSession($usrMail);

			$_SESSION['msg'] = 'loginSuccess';
			displayHome();
		} else {
			$_SESSION['msg'] = 'loginError';
			displayLogin();
		}
	} else {
		$_SESSION['msg'] = 'empty';
		displayLogin();
	}
}

/**
 * Function needed to create a new user into the database.
 * This function will be disabled after the devlopment period.
 * @param string $usr
 * @param string $pwd
 * @return bool
 */
function addUser($usr, $pwd)
{
	require_once 'models/databaseConnector.php';

	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	$query = "INSERT INTO `users` (`email`, `password`) VALUES ('" . $usr . "', '" . $pwd . "')";

	try {
		executeQuery($query, 'insert');
		$return = true;
	} catch (Exception $e) {
		echo "<script>console.log('" . $e . "');</script>";
		$return = false;
	}
	return $return;
}