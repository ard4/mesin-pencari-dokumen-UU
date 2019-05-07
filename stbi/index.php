<?php
require_once('Enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mesin Pencari</title>
</head>
<body align="center" style="background-color: blue">

<h3>TUGAS INFORMATION RETRIEVAL 2019</h3>
<h3>SISTEM PENCARIAN DOKUMEN PERUNDANG-UNDANGAN</h3>
<h4>UNIVERSITAS STIKUBANK SEMARANG</h4>
<h3>SUTARDI 17.01.65.0001</h3>
<h3>CUPU SKOLASTIKA 17.01.65.0005</h3>
<form method="post" action="hasilquery.php">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="search" value="Search"/>
</form>
<?php
if(isset($_POST['kata'])){
	$hasilquery = $_POST['kata'];
	
}
?><br/>
<br/>
<a href="upload.php"><input type="button" value="Upload File"/></a>
<a href="hasil_tokenisasi.php"</a>
<a href="hitungvektor.php"</a>
<a href="hitungbobot.php"</a>
<a href="query.php"></a>
<a href="awalquery.php"></a>
<a href="download.php"><input type="button" value="Download File"/></a>
<h3>S U T A R D I</h3>
<h3>CUPU SKOLASTIKA</h3>
</body>
</center>
</html>
