<?php
/**
 * save CSV file to upload folder, then
 * Import CSV to table `original_data` 
 *
*/
$target_dir = "uploads/";
$filename = $_FILES["file"]["name"];
$target_file = $target_dir . basename($filename);

$ext=substr($filename,strrpos($filename,"."),(strlen($filename)-strrpos($filename,".")));

if(isset($_POST["submit"])) {
	if($ext == ".csv") {

		// database configuration
		require "config.php";

		

		$file_uploaded = move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
	  	$file = fopen($target_file, "r");
		
	  $row = 1;
	  if ($file !== FALSE) {
	  		fgetcsv($file, 10000, ",");
     	        try {
     	        		// insert into database
						$connection = new PDO($dsn, $username, $password, $options);
	         while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
	         {	
     	        
     	        $product = array(
					"product_code" => $data[0],
					"product_label"  => $data[1],
					"gender"     => $data[2]
				);

						$sql = sprintf(
							"INSERT INTO %s (%s) values (%s)",
							"original_data",
							implode(", ", array_keys($product)),
							":" . implode(", :", array_keys($product))
					);

					$statement = $connection->prepare($sql);
					$statement->execute($product);


					    
	         }
				} catch(PDOException $error) {
					echo $sql . "<br>" . $error->getMessage();
				}
	     }
	         fclose($file);
	}
	else {
	    echo "Error: Please Upload only CSV File";
	}
	// after successfull import to database
	echo "Import Successfull. <a href='index.php'>Back to Index</a>";


}
?>