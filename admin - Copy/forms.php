<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan Politeknik Elektronika Negeri Surabaya</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Upload Buku</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="peminjaman.php"><i class="fa fa-fw fa-table"></i> Peminjaman</a>
                    </li>
					<li>
                        <a href="insertpem.php"><i class="fa fa-fw fa-edit"></i> Insert Peminjaman</a>
                    </li>
					<li>
                        <a href="deletepem.php"><i class="fa fa-fw fa-edit"></i> Delete Peminjaman</a>
                    </li>
					<li>
                        <a href="updatepem.php"><i class="fa fa-fw fa-edit"></i> Update Peminjaman</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Buku <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="tables.php">List Buku</a>
                            </li>
                            <li>
                                <a href="uploadbuku.php">Insert Buku</a>
                            </li>
							<li>
                                <a href="deletebuku.php">Delete Buku</a>
                            </li>
							<li>
                                <a href="updatebuku.php">Update Buku</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="daftaranggota.php"><i class="fa fa-fw fa-file"></i> Daftar Anggota</a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-fw fa-edit"></i> Insert Anggota</a>
                    </li>
					<li>
                        <a href="deleteanggota.php"><i class="fa fa-fw fa-edit"></i> Delete Anggota</a>
                    </li>
					<li>
                        <a href="updateanggota.php"><i class="fa fa-fw fa-edit"></i> Update Anggota</a>
                    </li>
					<li>
                        <a href="daftargalery.php"><i class="fa fa-fw fa-file"></i> Daftar Galery</a>
                    </li>
					<li>
                        <a href="insertgalery.php"><i class="fa fa-fw fa-edit"></i> Insert Galery</a>
                    </li>
					<li>
                        <a href="deletegalery.php"><i class="fa fa-fw fa-edit"></i> Delete Galery</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Insert Anggota
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php"> Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Insert Anggota
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
						<?php
						if(isset($_POST['add'])) {
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = 'root';
						$conn = mysql_connect($dbhost, $dbuser, $dbpass);
						if(! $conn ) {
						die('Could not connect: ' . mysql_error());
						}
						if(! get_magic_quotes_gpc() ) {
						$nama = addslashes ($_POST['nama']);
						$password = addslashes ($_POST['password']);
						$level = addslashes ($_POST['level']);
						$ttl = addslashes ($_POST['ttl']);
						$keterangan = addslashes ($_POST['keterangan']);
						}else {
						$nama = addslashes ($_POST['nama']);
						$password = addslashes ($_POST['password']);
						$level = addslashes ($_POST['level']);
						$ttl = addslashes ($_POST['ttl']);
						$keterangan = addslashes ($_POST['keterangan']);
						}
						$sql = "INSERT INTO user". "(nama,password,level,ttl,keterangan) ". "VALUES('$nama',$password,'$level','$ttl','$keterangan')";
						mysql_select_db('perpustakaan');
						$retval = mysql_query( $sql, $conn );
						if(! $retval ) {
						die('Could not enter data: ' . mysql_error());
						}
						echo "Entered data successfully\n";
						mysql_close($conn);
						}else {
						?>
                        <form method = "post" action = "<?php $_PHP_SELF ?>">
						<table border="0">
							<tr>
                            <div class="form-group">
                                <td><label>Nama</label></td>
								<td align='center'>:</td>
                                <td><input name = "nama" type = "text"
								id = "nama"></td>
                            </div>
							</tr>
							<tr>
                            <div class="form-group">
                                <td><label>Passwprd</label></td>
								<td align='center'>:</td>
                                <td><input name = "password" type = "text"
								id = "password"></td>
                            </div>
							</tr>
							<tr>
                            <div class="form-group">
                                <td><label>Level</label></td>
								<td align='center'>:</td>
                                <td><input name = "level" type = "text"
								id = "level"></td>
                            </div>
							</tr>
							<tr>
							<div class="form-group">
                                <td><label>TTL</label></td>
								<td align='center'>:</td>
                                <td><input name = "ttl" type = "text"
								id = "ttl"></td>
                            </div>
							</tr>
							<tr>
							<div class="form-group">
                                <td><label>Keterangan</label></td>
								<td align='center'>:</td>
                                <td><input name = "keterangan" type = "text"
								id = "keterangan"></td>
                            </div>
							</tr>
							<tr>
                           <td><input name = "add" type = "submit" id = "add"
						value = "Add Anggota"></td>
                            </tr>

                        </form>
						</table>
						<?php
						}
						?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
