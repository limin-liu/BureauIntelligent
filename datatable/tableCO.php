<?php
 
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
 require( '../authentication.php' );
 
// DB table to use
$table = 'CO';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    
    array(
        'db'        => 'date',
        'dt'        => 0,
        'formatter' => function( $d, $row ) {
            return date( 'jS M Y', strtotime($d));
        }
    ),
	
	array(
        'db'        => 'date',
        'dt'        => 1,
        'formatter' => function( $d, $row ) {
            return date( 'H:i:s', strtotime($d));
        }
    ),
	
	array( 'db' => 'co', 'dt' => 2 ),
   

);
 
// SQL server connection information
	
	
require( '../connection.php' );

Connection();


$sql_details = array(
    'user' => $mysqlusername ,
    'pass' => $mysqlpassword,
    'db'   => $dbname,
    'host' => $servername
);


 /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);