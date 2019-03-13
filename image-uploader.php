<?php
/**
 * edit product and upload image
 *
*/

include 'includes/header.php';

// if $_GET('id') has value
if( ! isset($_GET['id']) ) {
	return;
}
?>
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="imageUpload" id="imageUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php

// Image upload
$target_dir = "media/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
// check if file with same name exist, if exist exit execution

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if( isset($_POST["submit"]) && file_exists($target_file) ) {
	echo "Image with '" . $_FILES["imageUpload"]["name"] . "' name already exist";
	return;
} elseif( isset($_POST["submit"]) ) {
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Image Uploaded";
        $uploadOk = 1;
        move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// get url
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$dirurl = pathinfo($current_url);
// echo $dirurl['dirname'];


// database config
require "config.php";

if (isset($_POST['submit'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $image =[
    	"product_id" => $_GET['id'],
      "image_url" => $dirurl['dirname'] . "/" . $target_file
    ];

    $sql = "UPDATE migrated_data 
            SET image_url = :image_url
            WHERE product_id = :product_id";
  
  $statement = $connection->prepare($sql);
  $statement->execute($image);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}

echo "Back to Product List <a href=list-product.php>Product List</a>";

include 'includes/footer.php';