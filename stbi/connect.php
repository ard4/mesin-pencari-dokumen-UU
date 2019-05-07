<?php
$host='localhost';
$user='id9106974_sutardi';
$pass='sutardi';
$database='id9106974_dbstbi';
$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn){
echo "Ada masalah dengan koneksi database! Error: " . mysqli_error;
}
?>