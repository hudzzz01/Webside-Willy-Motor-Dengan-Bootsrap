<?php

if($_POST['kirim']){
	$admin = 'hdzzzzzz01@gmail.com';
	
	$nama = htmlentities($_POST['nama']);
	$email = htmlentities($_POST['email']);
	$judul = htmlentities($_POST['judul']);
	$pesan = htmlentities($_POST['pesan']);
	
	$pengirim = 'dari: '.$nama.' <'.$email.'>';
	
	if(mail($admin, $judul, $pesan, $pengirim)){
		echo 'Pesan Anda Telah di kirim. <a href="index.php"> Kembali </a>' ;
	}else{
		echo 'Pengiriman pesan gagal silahkan coba lagi <a href="index.php"> Kembali </a>' ;
}else{
header("Location: index.php):
}

?>