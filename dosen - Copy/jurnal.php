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
                <a class="navbar-brand" href="index.php">Jurnal</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
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
                        <a href="transaksipem.php"><i class="fa fa-fw fa-table"></i> Transaksi Peminjaman</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Buku <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="bukuumum.php">Buku Umum</a>
                            </li>
                            <li>
                                <a href="ebook.php">E-book</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="majalah.php"><i class="fa fa-fw fa-file"></i> Majalah</a>
                    </li>
                    <li>
                        <a href="ta.php"><i class="fa fa-fw fa-file"></i> TA</a>
                    </li>
                    <li>
                        <a href="thesis.php"><i class="fa fa-fw fa-file"></i> Thesis</a>
                    </li>
                    <li>
                        <a href="jurnal.php"><i class="fa fa-fw fa-file"></i> Jurnal</a>
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
                            Jurnal
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Jurnal
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                           <?php
									$host = 'localhost';
									$user = 'id2132403_root';
									$pass = '12345';
									$db = 'id2132403_perpustakaan';

									$connect = mysqli_connect($host, $user, $pass, $db);
							
									$query = mysqli_query($connect, "SELECT * from buku where jenis_buku='jurnal'");
									
								?>

							 <table class="table table-bordered table-hover">
								<tr>
									<th>id buku</th>
									<th>pengarang</th>
									<th>penerbit</th>
									<th>judul</th>
									<th>jenis buku</th>
									<th>uraian</th>
								</tr>

							<?php
								while($data = mysqli_fetch_array($query)){
							?>

							<tr>
								<td><?php echo $data['id_buku']?></td>
								<td><?php echo $data['pengarang']?></td>
								<td><?php echo $data['penerbit']?></td>
								<td><?php echo $data['judul']?></td>
								<td><?php echo $data['jenis_buku']?></td>
								<td><?php echo $data['uraian']?></td>
							</tr>

							<?php
								}
							?>
							</table>               
                        </div>
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
