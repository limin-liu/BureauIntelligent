<?php
   	require("authentication.php");
	include("connection.php");
   	
   	$link=Connection();
        
    $datenow = date("Y-m-d H:i:s");
	$temp1=$_GET["temp1"];   //在使用 $_GET 变量时，所有的变量名和值都会显示在 URL 中,而POST不会
    $hum1=$_GET["hum1"];
		
	$query ="INSERT INTO DHT22(datee,temperature,humidite) VALUES (\"$datenow\",\"$temp1\",\"$hum1\")";
    
		
	mysql_query($query,$link);
	mysql_close($link);

   	header('Location: indexRasberry.php');

?>
