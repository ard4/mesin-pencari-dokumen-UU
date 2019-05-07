<?php
//membuat koneksi ke database
$host = 'localhost';
  $user = 'id9106974_sutardi';      
  $password = 'sutardi';      
  $database = 'id9106974_dbstbi';  
    
  $konek_db = mysqli_connect($host, $user, $password);    
  $find_db = mysqli_select_db($database) ;
?>

<center>
<a href="upload.php"><input type="button" value="Upload"/></a> <a href="index.php"><input type="button" value="<< Kembali"/></a>
<a href="empty.php"><input type="button" value="KOSONGKAN"/></a> 
<h2>HASIL TOKENISASI DAN STEMMING</h2>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming Nazief Adriani</th>
    
</tr>

<?php  
// Perintah untuk menampilkan data
$queri="Select * From dokumen" ;  //menampikan SEMUA

$hasil=MySQL_query ($queri);    //fungsi untuk SQL

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysql_fetch_array ($hasil)){
$id = $data['dokid'];
 echo "    
        <tr>
        <td>".$data['nama_file']."</td>
        <td>".$data['token']."</td>
        <td>".$data['tokenstem']."</td>
        <td>".$data['tokenstem2']."</td>
        
        </tr> 
        ";
        
}

?>

</table>
