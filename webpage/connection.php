<?php

function Connection(){
	
	global $servername;
	global $mysqlusername;
	global $mysqlpassword;
	global $dbname;	
    $servername = "localhost";
    $mysqlusername = "root";
    $mysqlpassword = "";
    $dbname = "bureau";
     
    $connection = new mysqli($servername, $mysqlusername, $mysqlpassword, $dbname);
	mysqli_query($connection,"SET NAMES 'utf8'");
	
    if (!$connection) {
        die('MySQL ERROR: ' . mysql_error());
    }
    
    return $connection;
}
?>