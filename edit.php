<?php

	include_once("config.php");

	if(isset($_POST['update']))
	{
		$id = mysqli_real_escape_string($mysqli, $_POST['id']);
		$birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);
		$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);

		if( empty($birthday) || empty($Name)){

		if(empty($birthday)){
				echo "<font color='red'> Birthday field is empty. </font><br/>";
		}
		if(empty($Name)){
				echo "<font color='red'> Name field is empty. </font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";


	} else {

		$result = mysqli_query($mysqli, "UPDATE birthdays set birthday='$birthday', Name='$Name' WHERE id=$id");
		header("Location: index.php");
	}
}

?>


<?php

	$id = $_GET['id'];

	$result = mysqli_query($mysqli, "SELECT * FROM birthdays WHERE id = $id");

	while($res = mysqli_fetch_array($result))
	{
		$birthday = $res['birthday'];
		$Name = $res['Name'];
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="viewport" content="width=device-width, initial-scale=1.0">

	<title>Edit Data</title>
		<style>
		body{
			background-color: lightgray;
		}



	</style>
</head>
<body>

	<form name="form1" method="post" action="edit.php">

		<table width= "40%" border="5">
			<tr>
				<td>Birthday</td>
				<td><input type="text" name="birthday" value="<?php echo $birthday;?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				</td>

				<td><input type="submit" name="update" value="Update"></td>
			</tr>

		</table>

	</form>

</body>
</html>