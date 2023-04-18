<section class="border border-gray-600 container mx-auto p-6">
	<?php 
		if(isset($_GET['kategori']))
		{
			$judul = $_GET['kategori'];
		} 
	?>
	<h1 class="text-4xl font-semibold">Kategori <?= $judul ?></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>