<!DOCTYPE html>
<html lang="en">
<head>
 <title>Daftar Staff Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="css/bootstrap.min.css"type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

<style>
    #table-striped{
        width: 800;
    }
</style>

<div class="container">
  <br>
  <br>
  <h2 align="center">PIMPINAN DAN STAFF PERPUSTAKAAN PENS</h2>
   <br>
  <p>Berikut ini profil para Pimpinan Perpustakaan PENS yang senantiasa siap untuk membantu Anda:</p>
 
  <center><table class="table table-striped">
	  <?php
		$host = 'localhost';
		$user = 'id2132403_root';
		$pass = '12345';
		$db = 'id2132403_perpustakaan';

									$connect = mysqli_connect($host, $user, $pass, $db);

									$query = mysqli_query($connect, "SELECT * from user where level='admin'");
									
								?>
    <thead>
      <tr>
        <th></th>
      </tr>
    </thead>
	  <?php
	  	while($data = mysqli_fetch_array($query)){
	  ?>
    <tbody>
      <tr>
          <td><h4 align="center"><?php echo $data['keterangan']?></h4><p align="center"><?php echo $data['nama']?></p></td>
      </tr>  
    </tbody>
	  <?php
								}
							?>
  </table></center>
</div>

</body>
</html>
