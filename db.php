<?php
/**
 * database connection via PDO and create database and tables
 *
*/
require 'config.php';

try {
	$connection = new PDO("mysql:host=$servername", $username, $password, $options);
	$sql = file_get_contents("database/init.sql");
	$connection->exec($sql);

	echo "Database Created successfully ";
} catch (PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

?>
<p>Back to Index page <a href="index.php"></a></p>