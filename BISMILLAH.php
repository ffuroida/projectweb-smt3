<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Perpustakaan Politeknik Elektronika Negeri Surabaya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="css/bootstrap.min.css"type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
#header{
    width: 100px;
    height: 150px;
    background: #FFFFFF;
    line-height: 120px;

}
    .nav li ul {
        z-index: 999;
    }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #1b4679;
  }
  .carousel-indicators li {
      border-color: #fff;
  }
  .carousel-indicators li.active {
      background-color:#1b4679;
  }
 
.navbar{
    background:  #1b4679;
}
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
#copyright {
    width: 100%;
    height: 250px;
    background: #1b4679;
    text-align: 15px;
    color: #fff;
}
    
#copyright h3 {
    text-align: 15px;
    color: #fff;
}

    #visi{
        height: 570px
    }
    
    #galery{
        height: 600px;
        
    }
    
    #koleksi{
        height: 400px;
    background: #1b4679;
    }
    #koleksi h5{
         text-align: 15px;
    color: #fff;
    }

	.footer-distributed{
	background-color: #1b4679;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:#4169E1;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #000;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color: #0000 ;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}
</style>
    
    <style type="text/css">
      ul {list-style: none;padding: 0px;margin: 0px;}
      ul li {display: block;position: relative;float: left;border:1px solid #1b4679}
      li ul {display: none;}
      ul li a {display: block;background: #1b4679;padding: 5px 10px 5px 10px;text-decoration: none;
               white-space: nowrap;}
      ul li a:hover {background: #1b4679;}
      li:hover ul {display: block; position: absolute;}
      li:hover li {float: none;}
      li:hover a {background: #1b4679;}
      li:hover li a:hover {background: #FFFAF0;}
      #drop-nav li ul li {border-top: 0px;}
    </style>
    
    
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--header -->
      <div class="container"></div>
        <div id="header">
            <img src="Untitled-2.png" width="570" height="110"/>
        </div>
      <div class="container"></div>
<!--end header -->

  <!-- nav -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
    <li><a href="BISMILLAH.php">Home</a></li>
  <li><a href="#">Profile</a>
    <ul>
      <li><a href="#visi">Visi Misi</a></li>
       <li><a href="#galery">Galery</a></li>
      <li><a href="staff.php">Staff Perpustaaan</a></li>
    </ul>
  </li>
  <li><a href="#">E-sources</a>
    <ul>
      <li><a href="#koleksi">Koleksi</a></li>
      <li><a href="umum.php">Buku Umum</a></li>
      <li><a href="ebook.php">E-Book</a></li>
    </ul>
  </li>
  <li><a href="jurnal.php">Jurnal</a></li>
  <li><a href="anggota.php">Anggota</a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="nyekrip-form-login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
      

<!-- end nav -->
  
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <center><img src="_MG_0808-min%20-%20Copy.jpg" width="800" height="500"></center>
           <div class="carousel-caption">
        <h3>Pengetahuan</h3>
        <p>Adalah kebutuhan yang tak mengenal batas</p>
           </div>
          
      </div>
      <div class="item">
           <center><img src="_MG_0811-min%20-%20Copy.jpg" width="800" height="500"></center>
          <div class="carousel-caption">
        <h3>Orang Ter Pelajar</h3>
        <p>Menggunakan waktunya untuk belajar</p>
           </div>
      </div>
      <div class="item">
            <center><img src="_MG_0812-min%20-%20Copy.jpg" width="800" height="500"></center>
          <div class="carousel-caption">
        <h3>Succes Tomorow Begin Today</h3>
           </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    
<div class="container">
    <div id="visi" class="col-sm-12">
         <table class="table table-condensed1">
    <thead>
      <tr>
          <br>
          <br>
          <br>
        <th><h2 align="center">VISI</h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><p align="justify">Sesuai dengan visi dan misi PENS, Perpustakaan memiliki visi yakni: menjadi perpustakaan yang unggul dengan fasilitas yang lengkap, modern dan mampu memberikan pelayanan terbaik kepada pemakainya dengan berbasis teknologi komputer.</p></td>
      </tr>
         <tr>
        <th><h2 align="center">MISI</h2></th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td><p align="justify">1. Mengoleksi semua informasi yang berhubungan dengan ketentuan akademis di PENS.</p><p align="justify">2. Mengelola informasi dengan canggih dan modern agar dapat diakses pemakai dengan mudah, cepat dan tepat.</p><p align="justify">3. Memberikan fasilitas yang memadai kepada pemakai agar dapat mewujudkan fungsi perpustakaan sebagai sarana bantu proses belajar mengajar.</p></p><p align="justify">4. Memberikan fasilitas yang memadai kepada pemakai agar dapat mewujudkan fungsi perpustakaan sebagai sarana bantu proses belajar mengajar.</p></td>
      </tr>
    </tbody>
  </table>
    <br>
    <br>
    </div>
</div>

<div id="koleksi" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="col-sm-4">
     <center><a href="ta.php"><img src="stack-books-magnifier_icon-icons.com_49236.png"width="150" height="150"></a></center>
     <center><h5>Koleksi TA</h5></center>
    </div>
    <div class="col-sm-4">
    <center><a href="majalah.php"><img src="ditjen-pp.png"width="150" height="150"></a></center>
        <center><h5>Koleksi Majalah</h5></center>
    </div>
        <div class="col-sm-4">
    <center><a href="thesis.php"><img src="book-glasses_icon-icons.com_49248.png"width="150" height="150"></a></center>
             <center><h5>Koleksi Thesis</h5></center>
    </div>
</div>
    
<div id="galery" class="container-fluid text-center bg-grey">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h2>Galery</h2>
  <h4>Perpustakaan Politeknik Elektronika Negeri Surabaya</h4><br>
  <div class="row">
                    <div class="col-lg-8">
						<?php
						$host = 'localhost';
									$user = 'rot';
									$pass = '';
									$db = 'perpustakaan';

									$connect = mysqli_connect($host, $user, $pass, $db);

									$sql = 'SELECT * FROM galery ORDER BY id_gambar DESC';
									$result = mysqli_query($connect, $sql);
									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
											$url = $row["url"]; 
											$tgl = $row["gambar_date"]; 
											$namagmbr = $row['namagambar'];
											$gmbrid= $row['id_gambar'];
											
										 echo '
										 <center><div class="col-sm-3">
										  <tr>
										  <td "><img src="'.$url.'" width="200" height="150"></td>
										  </tr>
										  </div></center>';
										
										
										}
									}
							?>
							</table>   
		

                    </div>
                </div>
  </div><br>

<div id="copyright" > 
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Perpustakaan<span>PENS</span></h3>

				<p class="footer-links">
					<a href="BISMILLAH.php">Home</a>
					·
					<a href="jurnal.php">Jurnal</a>
					·
					<a href="majalah.php">Majalah</a>
					·
					<a href="ta.php">Koleksi TA</a>
					·
					<a href="thesis.php">Thesis</a>
				</p>

				<p class="footer-company-name">Copyright &copy; Fatin Furoida 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="glyphicon glyphicon-phone"></i>
					<p>+31 123 123</p>
				</div>

				<div>
					<i class="glyphicon glyphicon-envelope"></i>
					<p><a href="Pens.ac.id">pens.ac.id</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Politektik Elektronika Negeri Surabaya</span>
					Jl. Raya ITS, Keputih, Sukolilo, Surabaya - Jawa Timur
				</p>

				<div>

					<a href="https://web.facebook.com/library.pens.ac.id/?_rdc=1&_rdr"><img src="icon_fb.png" height="40px" width="40px"></a>
					<a href="https://www.youtube.com/user/penseepis"><img src="YouTube-icon.png" height="40px" width="40px"></a>

				</div>

			</div>

		</footer>
</div>


</body>
</html>
