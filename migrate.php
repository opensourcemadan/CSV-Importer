<?php
/**
 * Migrate date from table `original_data` to `migrated_data`
 *
*/

// database configuration
require "config.php";

try {
	// insert into database
	$connection = new PDO($dsn, $username, $password, $options);
	$sql = 'INSERT INTO migrated_data (sku, `name` ) 
	SELECT concat(IF(gender="m","men_","women_"),product_code), product_label from original_data;

	';

	$statement = $connection->prepare($sql);
	$statement->execute();
	// echo $sql;


} catch(PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
}

?>
<p>Back to Index page <a href="index.php"></a></p>