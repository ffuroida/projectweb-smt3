<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}

mysql_select_db('perpustakaan');
$query1="select * from peminjaman ";
 
 
if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $query1="SELECT * FROM  peminjaman 
  where id_user like '%$qcari%'
  or nama like '%$qcari%'  ";
}
 
$result=mysql_query($query1) or die(mysql_error());
$no=1; //penomoran 

?>

<table class="table table-bordered table-hover">
								<tr>
									<th>ID Peminjaman</th>
									<th>ID User</th>
									<th>Nama</th>
									<th>ID Buku</th>
									<th>Judul</th>
									<th>Tanggal Pinjam</th>
									<th>Tanggal Kembali</th>
									<th>Status</th>
								</tr>
	<?php
while($rows=mysql_fetch_object($result)){
    ?>
	
	<tr>
		<td><?php    echo $rows -> id_peminjaman;?></td>
		<td><?php    echo $rows -> id_user;?></td>
        <td><?php    echo $rows -> nama;?></td>
        <td align='right'><?php    echo $rows -> id_buku;?></td>
		<td><?php    echo $rows -> tgl_pinam;?></td>
		<td><?php    echo $rows -> tgl_kembali;?></td>
		<td><?php    echo $rows -> status;?></td>
	</tr>
      <?php
$no++;
}?>
    </table>  