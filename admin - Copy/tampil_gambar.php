<html>
<body>
<p align="center">
  <?php
//Masukkan koneksi database disini
$namafolder="gambar/"; //tempat menyimpan file
$con=mysql_connect("localhost","root","root") or die("Gagal");
mysql_select_db("perpustakaan")  or die("Gagal");
   $datatamu = mysql_query("select galery,gambar from gambar order by gambar asc;") or die("Gagal :".mysql_error());  
   echo '<table width="400" align="center" border="1">';  
   echo '<tr>';  
   echo '<th>Galery</th>';  
   echo '<th>Gambar</th>';  
   echo '</tr>';  
   while ($rec=mysql_fetch_object($datatamu))   
   {      
     echo '<tr>';     
     echo '<td>'.$rec->gambar.'</td>';     
     echo '<td>';
     //ini bagian memanggil file gambar
     echo '<img src="'.$rec->gambar.'" alt="'.$rec->gambar.'" title="'.$rec->gambar.'" width="100" />';
     echo '</td>';     
     echo '</tr>';  
   }  
   echo '</table>';  
   mysql_close();//tutup koneksi database  
?>
</p>
<p align="center"><a href="Lat_simpan_gambar.php">&lt;&lt; Kembali</a></p>
</body>
</html>
