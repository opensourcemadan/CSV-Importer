<?php
/**
 * This list the product from migrated_data table
 *
*/

try {	
		require "config.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * 
				FROM migrated_data";

		$location = $_POST['location'];

		$statement = $connection->prepare($sql);
		$statement->execute();

		$result = $statement->fetchAll();
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}

	// include header
	include "includes/header.php";
?>

<!-- show results in table -->
<h1>List of products</h1>
<table>
	<thead>
		<tr>
			<th>SN</th>
			<th>Product ID</th>
			<th>Product SKU</th>
			<th>Product Name</th>
			<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($result as $key => $product) { ?>
			<tr>
				<td><?php echo (int)$key + 1; ?></td>
				<td><?php echo (int)$product['product_id']; ?></td>
				<td><?php echo htmlentities($product['sku']); ?></td>
				<td><?php echo htmlentities($product['name']); ?></td>
				<td><img width="80" src="<?php echo htmlentities($product['image_url']); ?>"></td>
				<td><a href="image-uploader.php?id=<?php echo (int)$product['product_id']; ?>">Edit</a></td>
			</tr>
		<?php } ?>
	</tbody>

	<tfoot>
		<tr>
			<th>SN</th>
			<th>Product ID</th>
			<th>Product SKU</th>
			<th>Product Name</th>
			<th>Image</th>
		</tr>
	</tfoot>
</table>

<p>Back to Home <a href="index.php">Home</a></p>

<?php include "includes/footer.php" ?>