<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'perpustakaan';

    $connect = mysqli_connect($host, $user, $pass, $db);

    if($connect){
        echo "koneksi sukses"."<br>";
    }else{
        echo "gagal";
    }

    $query = mysqli_query($connect, "SELECT * from buku");
?>
    <table border='1'>
        <tr>
            <th>ID buku</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>penerbit</th>
            <th>jenis buku</th>
            <th>view</th>
            <th>        </th>
        </tr>
   
            
<?php
    while($data = mysqli_fetch_array($query)){
?>

<tr>
    <td><?php echo $data['id_buku']?></td>
    <td><?php echo $data['judul']?></td>
    <td><?php echo $data['pengarang']?></td>
    <td><?php echo $data['penerbit']?></td>
    <td><?php echo $data['jenis_buku']?></td>
    <td><?php echo $data['gambar']?></td>
    <td class="center"><a href="edit_buku.php?id=<?php echo $data['kd_buku']; ?>" > Edit </a>|<a href="hapus_buku.php?id=<?php echo $data['kd_buku']; ?>"
    onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['judul_buku']; ?>?')"> hapus</a></td>
</tr>

<tr>
<form action = "tambah.php"methode ="GET"><input type="submit" name="input " value="input"></form>
</tr>
        
<?php
}
?>
 </table>