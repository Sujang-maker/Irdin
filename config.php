<?php
//koneksi ke database mysql, silahkan di rubah dengan koneksi ke tabel mahasiswa
$koneksi = mysqli_connect("localhost","root","","mahasiswa");

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_error()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
?>
	
