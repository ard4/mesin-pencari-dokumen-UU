<html>
<title>Aplikasi Download</title>
<center><body align="center" style="background-color: silver">

<br>
<h2>Download PDF</h2></center>
<?php
  $konek = mysqli_connect("localhost","id9106974_sutardi","sutardi","id9106974_dbstbi");
  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);
  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpan.php?file=$r[nama_file]\">Download File</a><hr><br>";
  }
?>
<center><a href="index.php"><input type="button" value="<< Kembali"/></a></center>
</body>
</html>
