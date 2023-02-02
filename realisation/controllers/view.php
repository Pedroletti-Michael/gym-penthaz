<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 27.01.2023
 * Description : This controller is used to manage display for all the pages
 **/


/**
 * Function used to display login page
 * @return void
 */
function displayLogin()
{
	if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
		displayHome();
	} else {
		require 'views/login.php';
	}
}

/**
 * Function used to display homepage
 * @return void
 */
function displayHome()
{
	//TODO we will need to get information from the DB that contain all the info for the homepage
	require 'views/home.php';
}

/**
 * Function used to display gallery page
 * @return void
 */
function displayGallery()
{
	require 'views/gallery.php';
}

/**
 * Function used to display DvD page
 * @return void
 */
function displayDvd()
{
	require 'views/dvd.php';
}

/**
 * Function used to display the page that admit to modify the content of the website
 * @return void
 */
function displayAdminPanel()
{
	if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
		require 'view/home.php';
	} else {
		displayLogin();
	}
}