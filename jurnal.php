<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jurnal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="css/bootstrap.min.css"type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<!--header -->
      <div class="container"></div>
        <div id="header">
            <img src="Untitled-2.png" width="570" height="110"/>
        </div>
      <div class="container"></div>
<!--end header -->

 				<div class="container">
				<br>
				<br>
				  <h3>Daftar Jurnal Politeknik Elektronika Negeri Suabaya</h3>
				  <table class="table">
					  <?php
						$host = 'localhost';
						$user = 'id2132403_root';
						$pass = '12345';
						$db = 'id2132403_perpustakaan';
						$connect = mysqli_connect($host, $user, $pass, $db);

						$query = mysqli_query($connect, "SELECT * from buku where jenis_buku='jurnal'");

												?>
					<thead>
					  <tr class="info">
						<th>ID Buku</th>
						<th>Pengarang</th>
						<th>Penerbit</th>
						<th>Judul</th>
						<th>Jenis Buku</th>
						<th>Uraian</th>
					  </tr>

					</thead>

					<?php
					  while($data = mysqli_fetch_array($query)){
					?>
					<tbody>
					  <tr>
						<td><?php echo $data['id_buku']?></td>
						<td><?php echo $data['pengarang']?></td>
						<td><?php echo $data['penerbit']?></td>
						<td><?php echo $data['judul']?></td>
						<td><?php echo $data['jenis_buku']?></td>
						<td><?php echo $data['uraian']?></td>
					  </tr>
					</tbody>
					  <?php
						}
					  ?>
				  </table>
			</div>
</body>
</html>

