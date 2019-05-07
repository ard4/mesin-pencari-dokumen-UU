<html>
<title>Form Empty</title>
<body align="center" style="background-color: orange">
<br>
<br>
<h2>Halaman Pengosongan</h2>
<?php
$host = 'localhost';
  $user = 'id9106974_sutardi';      
  $password = 'sutardi';      
  $database = 'id9106974_dbstbi';  
    
  $konek_db = mysqli_connect($host, $user, $password);    
  $find_db = mysqli_select_db($database) ;

$query1 = "DELETE FROM `dokumen` WHERE 1";
$query2= "DELETE FROM `upload` WHERE 1";
 
$hasil1 = mysql_query ($query1);
$hasil2 = mysql_query ($query2);

$files = glob('files/*.pdf'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
echo "Data telah dihapus.";
?>
<br>
<a> Kembali ke tabel ? </a> <br>
<br>
<a href="index.php"><input type="button" value="Ya"/></a> <a href="empty.php"><input type="button" value="Tidak"/></a>
</body></center>
</html>
