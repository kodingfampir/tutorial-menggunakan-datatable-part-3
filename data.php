<?php
// Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db'   => 'kodingfampir'
);

// DB table to use
$table = 'datatable_3';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(
    array( 'db' => 'nama',      'dt' => 0 ),
    array( 'db' => 'alamat',    'dt' => 1 ),
    array( 'db' => 'pekerjaan', 'dt' => 2 ),
    array( 'db' => 'usia',      'dt' => 3 ),
);

// Include SQL query processing class
require( 'ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);