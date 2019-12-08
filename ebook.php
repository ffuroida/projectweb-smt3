<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar E-book</title>
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
	
  <br>
  <br>
  <h3 align="center">Daftar Buku TA Politeknik Elektronika Negeri Suabaya</h3>
	
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">              
								<?php
									$host = 'localhost';
									$user = 'id2132403_root';
									$pass = '12345';
									$db = 'id2132403_perpustakaan';

									$connect = mysqli_connect($host, $user, $pass, $db);

									$query = mysqli_query($connect, "SELECT * from buku where jenis_buku='ebook'");
									
								?>

							 <table class="table table-bordered table-hover">
								<tr>
									<th>id buku</th>
									<th>judul</th>
									<th>jenis buku</th>
									<th>pengarang</th>
									<th>Deskripsi</th>
									
								</tr>

							<?php
								while($data = mysqli_fetch_array($query)){
							?>

							<tr>
								<td><?php echo $data['id_buku']?></td>
								<td><?php echo $data['judul']?></td>
								<td><?php echo $data['jenis_buku']?></td>
								<td><?php echo $data['pengarang']?></td>
								<td><?php echo $data['penerbit']?></td>
								
							</tr>

							<?php
								}
							?>
							</table>               
                        </div>
                    </div>
                </div>
                <!-- /.row -->


</body>
</html>
