<?php

$con = @mysqli_connect('127.0.0.1', 'hcrowley', 'charlie3', 'hcrowley_books');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
?>
