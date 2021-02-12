<?php

$id = $_GET['id'];

include("config.php");
$result = mysqli_query($mysqli, "DELETE FROM birthdays where id=$id");

header("Location:index.php");

?>