<?php 
	$db_server = "https://imsu.co/phpmyadmin/";
	$db_user = "im12user_db";
	$db_pass = "s0Qh5EyajreTuERc";
	$db_name = "im12";

	$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

	mysqli_set_charset($conn,"UTF8");
 ?>