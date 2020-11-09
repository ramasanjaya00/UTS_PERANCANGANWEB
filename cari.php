<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
include('config.php'); 
?>

<!DOCTYPE html>
<html>
<head>
 <title>Cari data dengan PHP</title>
</head>
<body>
 <h1>Data Mahasiswa</h1>
 
 <form method="get" action="">
  <label for="cari">Cari Mahasiswa</label>
  <input type="text" name="cari">
 </form>
 <br/>
 
 <div class="container" style="margin-top:20px">
		<center><font size="6">Data Mahasiswa</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
				</tr>
  </thead>
  <tbody>
   
   <?php
   $no = 1;
   // tampilkan data mahasiswa
   $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

   // kondisi apabila form pencarian diisi
   if (isset($_GET['cari'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nama_Mhs LIKE '%".$_GET['cari']."%'");
   }

   while ($dt = mysqli_fetch_assoc($query)) {
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $dt['Nim']; ?></td>
    <td><?= $dt['Nama_Mhs']; ?></td>
	<td><?= $dt['Jenis_Kelamin']; ?></td>
	<td><?= $dt['Program_Studi']; ?></td>
   </tr>

   <?php
   }
   ?>

  </tbody>
 </table>
</body>
</html>