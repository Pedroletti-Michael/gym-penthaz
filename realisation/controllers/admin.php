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
function login($userMail, $pwd){
    if($userMail != '' && $pwd != ''){
        $return = "";
        if($return != false){
            createSession($return[0]['email'], $return[0]['lastname'], $return[0]['firstname']);

            $_SESSION['msg'] = 'loginSuccess';
            displayHome();
        }
        else{
            $_SESSION['msg'] = 'loginError';
            displayLogin();
        }
    }
    else{
        $_SESSION['msg'] = 'empty';
        displayLogin();
    }
}

/**
 * Function used to create a session during the connection
 * @param string $email
 * @param string $lastname
 * @param string $firstname
 * @return void
 */
function createSession($email, $lastname, $firstname){
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $lastname. " " .$firstname;
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