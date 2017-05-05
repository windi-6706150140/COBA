<?php
include('config/koneksi.php');
include('config/library.php');
	$judul = mysql_real_escape_string($_POST['judul']);
	$isbn = mysql_real_escape_string($_POST['Isbn']);
	$jumlah = mysql_real_escape_string($_POST['jumlah']);
	$tahun = mysql_real_escape_string($_POST['tahun']);
	$pengarang = mysql_real_escape_string($_POST['pengarang']);
	$deskripsi = mysql_real_escape_string($_POST['deskripsi']);
	$penerbit = mysql_real_escape_string($_POST['penerbit']);
	$bykFile = count($_FILES['foto']['name']);
	

	//getfilename
	//get the file name
	$fileSize = $_FILES['foto']['size']; //get the size
	$fileError = $_FILES['foto']['error']; //get the error when upload\
	$direktori= "assets/buku/";

	//ini coba
	//check if the file is corrupt or error
	for ($i = 0; $i < $bykFile; $i++) {
	$fileName = $_FILES['foto']['name'];
	$Images=$direktori.basename($_FILES['foto']['name']);
	$move = move_uploaded_file($_FILES['foto']['tmp_name'],$Images); //Verly Says : Data foto Pindah Ke Directory

		mysql_query("insert into yo_buku
			(id_buku,judul,Isbn,tahun_terbit,jumlah,date,kd_pengarang,kd_penerbit,deskripsi,gambar,status)
			values
			('','$judul','$isbn','$tahun','$jumlah','$date','$pengarang','$penerbit','$deskripsi','$fileName','0')
		");
	}
 ?> 
<script language="JavaScript">document.location=('./')</script>?></div>
