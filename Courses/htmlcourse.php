<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Display All Videos from database using php</title>
</head>

<body>
	<div class="row">
		<?php
		include("../Admin/db.php");
		$q = "SELECT * FROM video";
		$query = mysqli_query($conn, $q);
		while ($row = mysqli_fetch_array($query)) {
			$name = $row['name'];
			?>
			<div class="col-md-4">
				<video width="100%" controls>
					<source src="<?php echo '../Admin/upload/' . $name; ?>">
				</video>
			</div>
		<?php }
		?>
	</div>
	</div>
</body>

</html>