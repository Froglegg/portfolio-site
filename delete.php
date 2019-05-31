<?php

include ('db_connect.php');

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM notes WHERE id='".$id."'");
mysqli_close($con);
header("Location: storybook.php");
?>
