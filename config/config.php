<?php
// koneksi ke database
 
$databaseHost = 'localhost';
$databaseName = 'db_streamit';
$databaseUsername = 'root';
$databasePassword = 'password';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>