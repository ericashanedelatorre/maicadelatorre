<?php

	include_once("config.php");
	$result = mysqli_query($mysqli, "SELECT * FROM country");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title>My Database</title>
	<style>
		
		body{
			margin-left: 100px;
			margin-right: 100px; 
			background-color: lightgray;
		}

		h1{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
		font-weight: bold;
		color: white;
		padding: 20px;
		background-color: slateblue;
		margin-bottom: 0;
		font-size: 90px;
		}

		.navbar{
		padding: 10px;
		}

		table {
    	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
	<h1>My PHP CRUD</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 0">
	<a href="add.html" class="btn btn-basic btn-outline-success" role="button">Add New Data</a>
</nav>

	<table bgcolor="" width="100%">
		<tr bgcolor="gray">
			<td>ISO</td>
			<td>Name</td>
			<td>Nicename</td>
			<td>ISO3</td>
			<td>Numcode</td>
			<td>Phonecode</td>
			<td>Created</td>
			<td>Update</td>
		</tr>

		<?php
			while ($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				
				echo "<td>".$res['iso']."</td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['nicename']."</td>";
				echo "<td>".$res['iso3']."</td>";
				echo "<td>".$res['numcode']."</td>";
				echo "<td>".$res['phonecode']."</td>";
				echo "<td>".$res['created_at']."</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
				echo "</tr>";
			}

		?>

	</table>

    <script src="js/bootstrap.bundle.min.js">

</body>
</html>