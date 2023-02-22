<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 02.02.2023
 * Description : File used to manage connection
 **/


/**
 * Function used to get all the users from the database.
 * This function will essentially used for user connection.
 * @return array|bool
 */
function getAllUsers()
{
	require_once 'models/databaseConnector.php';

	$query = "SELECT `email`, `password` FROM `users`;";
	$data = executeQuery($query);

	if (is_array($data))
		return ($data);
	else
		return (false);
}


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
	if (is_array($users)) {
		foreach ($users as $user) {
			if ($user['email'] == $usr) {
				if (password_verify($pwd, $user['password']))
					return (true);
			}
		}
		return (false);
	} else
		return (false);
}


/**
 * Function used to create a session during the connection
 * @param string $email
 * @param string $lastname
 * @param string $firstname
 * @return void
 */
function createSession($email)
{
	$_SESSION['email'] = $email;
}