<?php
require_once 'php/connect.php';
$latest = $mysqli->query("SELECT * FROM tb_berita ORDER BY waktu_post DESC LIMIT 4");

?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="style/cssnya.css">
</head>
<body>

	<div class="wrap">
		<!-- bagian menu		 -->
		<?php require 'nav.php'; ?>
		<!-- akhir bagian menu -->
		<!-- bagian sidebar website -->
		<aside class="sidebar">
			<div class="widget">

			<?php
			$row = $latest->fetch_assoc();
			$image_name = substr($row['waktu_post'],0,4).substr($row['waktu_post'],5,2).substr($row['waktu_post'],8,2).substr($row['waktu_post'],11,2).substr($row['waktu_post'],14,2).substr($row['waktu_post'],17,2).".jpg";
			echo '<div class="b" style="margin-right: 10px">
			<div style="left: 56%" class="label">'.$row['kategori'].'</div>
			<img src="images/pic/'.$image_name.'" width="222px" height="135px">
			<h2><div class="box-judul-sm"><a href="baca.php?id='.$row['id'].'">'.$row['judul'].'</a></h2>
		</div>';

					$row = $latest->fetch_assoc();
			$image_name = substr($row['waktu_post'],0,4).substr($row['waktu_post'],5,2).substr($row['waktu_post'],8,2).substr($row['waktu_post'],11,2).substr($row['waktu_post'],14,2).substr($row['waktu_post'],17,2).".jpg";
			echo '<div class="b" style="margin-right: 10px">
			<div style="left: 56%" class="label">'.$row['kategori'].'</div>
			<img src="images/pic/'.$image_name.'" width="222px" height="135px">
			<h2><div class="box-judul-sm"><a href="baca.php?id='.$row['id'].'">'.$row['judul'].'</a></h2>
		</div>';
	?>

			</div>
		</aside>
		<!-- akhir bagian sidebar website -->

		<!-- bagian konten Blog -->
		<div class="blog">
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Diki Alfarabi Hadi</b>
				</div>
		<?php
		$row = $latest->fetch_assoc();
		$image_name = substr($row['waktu_post'],0,4).substr($row['waktu_post'],5,2).substr($row['waktu_post'],8,2).substr($row['waktu_post'],11,2).substr($row['waktu_post'],14,2).substr($row['waktu_post'],17,2).".jpg";
		echo '<div class="container2">
		<div class="label">'.$row['kategori'].'</div>
		<img src="images/pic/'.$image_name.'" width="600px" height="380px" class="bter">
		<div class="box-judul"><a href="baca.php?id='.$row['id'].'">'.$row['judul'].'</a></div>
		</div>';
		?>
				<h1> Template Sederhana HTML & CSS </h1>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>				
				<a href="#" class="continue-lendo">Selengkapnya →</a>
			</div>
			<div class="conteudo">
				<div class="post-info">
					Di Posting Oleh <b>Diki Alfarabi Hadi</b>
				</div>
				<img src="https://www.malasngoding.com/wp-content/uploads/2016/02/tutorial-html-bahasa-indonesia.png">
				<h1> Belajar HTML Lengkap </h1>
				<hr>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>				
				<a href="#" class="continue-lendo">Selengkapnya →</a>
			</div>
		</div>
		<!-- akhir bagian konten Blog -->
	</div>

</body>
</html>