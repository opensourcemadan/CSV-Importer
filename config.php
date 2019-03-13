<?php
/**
 * Configuration for database connection
 *
*/
$servername = "127.0.0.1";
$username 	= "root";
$password 	= "";
$charset 	= 'utf8mb4';
$dbname		= "mindarc_assessment";
$dsn        = "mysql:host=$servername;dbname=$dbname;";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
