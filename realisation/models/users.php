<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 02.02.2023
 * Description : login page
 **/

/**
 * Function used to verify if the user exist in the database
 * and if it's right, check if the password is correct or not
 * @param string $usr email of the user
 * @param string $pwd password of the user
 * @return bool
 */
function checkLogin($usr, $pwd)
{
	$users = getAllUsers();
	foreach ($users as $user) {
		if ($user['email'] == $usr) {
			if (password_hash($pwd, $user['password']))
				return (true);
		}
	}
	return (false);
}


/**
 * Function used to create a session during the connection
 * @param string $email
 * @param string $lastname
 * @param string $firstname
 * @return void
 */
function createSession($email, $lastname, $firstname)
{
	$_SESSION['email'] = $email;
	$_SESSION['username'] = $lastname . " " . $firstname;
}

/**
 * Function used to log out from the website
 * @return void
 */
function logOut()
{
	$_SESSION = array();
	session_destroy();

	displayLogin();
}