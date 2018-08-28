
<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $mahasiswa['nama'],
            'jurusan'   =>  $mahasiswa['jurusan'],
            'alamat'    =>  $mahasiswa['alamat'],);
 echo json_encode($data);
?>