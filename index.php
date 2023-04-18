<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SaCode - Berita</title>

	<!-- Tailwind CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

	<!-- HEADER START -->
	<?php include('include/header.php'); ?>
	<!-- HEADER END -->



	<!-- NAV START -->
	<?php include('include/nav.php') ?>
	<!-- NAV END -->


	<!-- CONTENT START -->
	<?php 
		// var_dump($_GET['page']);
	 ?>
	<?php 
		if(isset($_GET['kategori']))
		{
			include('pages/kategori.php');
		} else{
			include('pages/beranda.php');
		}

	?>
	<!-- CONTENT END -->



	<!-- FOOTER START -->
	<?php include('include/footer.php') ?>
	<!-- FOOTER END -->
	


</body>
</html>