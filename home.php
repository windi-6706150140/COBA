<?php
include "config/koneksi.php";
	$bukusaya=$_SESSION['id_anggota'];
	$sql_news = "SELECT *from yo_anggota";
	$qry_news = mysql_query($sql_news)or die ("Gagal query tampil");
	$yoah=mysql_num_rows($qry_news);

	$sql_news = "SELECT *from yo_buku";
	$qry_news = mysql_query($sql_news)or die ("Gagal query tampil");
	$yoah1=mysql_num_rows($qry_news);

	$sql_news = "SELECT yo_anggota.nama,yo_anggota.username,yo_anggota.password,yo_anggota.alamat,yo_anggota.email,yo_anggota.no_telp,yo_anggota.photo
	FROM yo_anggota INNER JOIN yo_peminjaman on yo_anggota.id_anggota=yo_peminjaman.id_anggota where yo_peminjaman.id_anggota='$bukusaya'";
	$qry_news = mysql_query($sql_news)or die ("Gagal query tampil");
	$yoah2=mysql_num_rows($qry_news);	
?> 
        <div class="warper container-fluid">        	
            <div class="page-header"><h1>Sistem Informasi Perpustakaan</h1></div>
            <div class="row">            
            	<div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">                    	
                    	<a href="javascript:see();"><i class="fa fa-book bg-danger transit stats-icon"></i></a>
                        <h3 class="transit"><?php echo $yoah1 ?> Buku</h3>
                        <p class="text-muted transit">Lihat Buku</p>
                    </div>
                </div><?php if ($_SESSION['level']=="admin"){?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<a href="javascript:input();"><i class="fa fa-plus-square-o bg-info transit stats-icon"></i></a>
                         <h3 class="transit">Input</h3>
                        <p class="text-muted transit">Buku</p>
                    </div>
                </div><?php }else{ ?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<a href="javascript:saya(<?php echo $_SESSION['id_anggota']; ?>);"><i class="fa fa-glyphicon glyphicon-bookmark bg-info transit stats-icon"></i></a>
                         <h3 class="transit"><?php echo $yoah2 ?> Buku</h3>
                        <p class="text-muted transit">Buku Saya</p>
                    </div>
                </div><?php } ?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    <a href="javascript:anggota();">
                    	<i class="fa fa-user bg-success transit stats-icon"></i></a>
                        <h3 class="transit"><?php echo $yoah ?> Anggota</h3>
                        <p class="text-muted transit">Anggota</p>
                    </div>
                </div>            
            </div>
            <div class="row">
            	<div class="col-lg-16">
                <div id="see">
       
