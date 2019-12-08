<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass='';
$dbname='perpustakaan'; 
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION['username'] = $user;
    $_SESSION['login_user'] = $user;
    $_SESSION['password'] = $pass;
	//echo $user."<br/>";
	//echo $_SESSION['password'];
	$sql = 'SELECT * FROM user';
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) { 
			$tempusername = $row["nama"];
			$temppassword = $row["password"];
			if(($user == $tempusername) && ($pass == $temppassword)){
	           $tempstatus = $row['level'];
				if($tempstatus == 'admin'){
					header("location:admin - Copy/");
				}else if($tempstatus == 'mahasiswa'){
					header("location:../../dosen - Copy/");
				}else{
					header("location:../../dosen - Copy/");
				}
	
				break;
			}else{
				echo "tea";
			}
		}
	}
}
?>