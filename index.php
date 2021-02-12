<?php

	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM birthdays");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>My Database</title>
	<style>
		

		h1 {
				font-family: "courier new";
		border-collapse: collapse;
		width: 100%;
		font-weight: bold;
		color: dark;
		padding: 20px;
		background-color: tomato;
		margin-bottom: 0px;
		font-size: 100px;
		}
		nav{
			background-color: tomato;
			margin-bottom: 1px;
		}
			table {
		}
    font-family: "courier new", courier, monospace;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}




	</style>
</head>
<body>

	<div class="text-center">
	<h1><?php echo "My PHP CRUD"; ?></h1>
</div>
	
	<nav class="navbar navbar-expand-sm" style="margin-top: 0">
	<a href="add.html" class="btn btn-light btn-outline-secondary" role="button">Add New Data</a>
	</nav>

	<table bgcolor="" width="100%">
		<tr bgcolor="gray">
			
			<td>Birthday</td>
			<td>Name</td>
			<td>Created</td>
			<td>Update</td>

		</tr>

		<?php
			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
		
				echo "<td>".$res['birthday']."</td>";
				echo "<td>".$res['Name']."</td>";
				echo "<td>".$res['created_at']."</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
				echo "</tr>";
			}
		?>
	</table>
	<script src="js/bootstrap.bundle.min.js">
</body>
</html>