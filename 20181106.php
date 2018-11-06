<?php

function test($val){
	$sql = "SELECT * FROM `test` WHERE `name` = '$val'";
	$result = mysqli_query($link,$sql);
	
	return mysqli_fetch_array($result);
	
}




?>

