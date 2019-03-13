<?php
/**
 * Contains form to upload csv file 
 *
*/
?>
<?php
// include header.php
include "includes/header.php" ?>
	
	<form method="post" action="pop-table.php" enctype="multipart/form-data">
		<input type="file" name="file" id="file">
		<input type="submit" name="submit">
	</form>

<?php
// include footer.php
include "includes/footer.php" ?>