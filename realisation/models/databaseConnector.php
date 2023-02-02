<?php
/**
 * Authors : Pedroletti Michael
 * CreationFile date : 30.01.2023
 * Description : This file contain all the function used to connect into the DB
 **/

/**
 * Function used to connect into a database
 * @return PDO|error
 */
function openDBConnexion(){
    $tempDbConnexion = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'penthaz';
    $userName = 'gympenthaz';
    $userPwd = '1234';

    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage() . ' ' . $userPwd;
    }
    return $tempDbConnexion;
}

/**
 * Function used to execute a query to the db
 * @param $query - query
 * @param null $type - define if we user a select or a set - null = select query
 * @return array|bool - can return a table of data or true/false
 */

/**
 * Function used to execute a query
 * @param string $query -> contain the query that need to be executed
 * @param mixed $type -> param to know if it's a select or not
 * @return PDOStatement|array|bool|null
 */
function executeQuery($query, $type=null){
    $queryResult = null;

    $dbConnexion = openDBConnexion();

    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);
        $statement->execute();
        if ($type == null){
            $queryResult = $statement->fetchAll();
        }
        else{
            $queryResult = $statement;
        }
    }

    $dbConnexion = null;
    return $queryResult;
}