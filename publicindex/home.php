<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Website | Raflyidan</title>
	<link rel="website icon" type="png" href="../resources/img/icon/R.png">

	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/fontawesome/css/all.css">

	<link rel="stylesheet" href="../resources/css/style.css">
</head>
<body>
	<nav class="navbar fixed-top">
		<div class="container-fluid">
			<nav class="nav" id="navbar-scroll">
				<a class="navbar-brand" href="home.php">
					<img src="../resources/img/icon/R.png">
				</a>
				<a class="nav-link" href="#home">Home</a>
				<a class="nav-link" href="#aboutme">About Me</a>
				<a class="nav-link" href="#experience">Experience</a>
				<a class="nav-link" href="#mygear">Equipment</a>
				<a class="nav-link" href="../index.php">Logout</a>
			</nav>
		</div>
	</nav>

	<div id="home" data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-smooth-scroll="true" class="tampilan1" tabindex="0">
		<div id="carouselGambar" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselGambar" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../resources/img/slide/gambar1.jpg">
					<div class="carousel-caption">
						<h3>Background</h3>
						<hr>
						<p>Seorang mahasiswa yang sedang menempuh jurusan Teknik Informatika yang berasal dari SMK jurusan Rekayasa Perangkat Lunak</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../resources/img/slide/gambar2.jpg">
					<div class="carousel-caption">
						<h3>Short Movie</h3>
						<hr>
						<p>Salah satu dari hasil karya seni berupa short movie yang ditujukan untuk memenuhi tugas besar mata kuliah Multimedia di kampus</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../resources/img/slide/gambar3.jpg">
					<div class="carousel-caption">
						<h3>Gear & Accessories</h3>
						<hr>
						<p>Mencangkup informasi seputar equipment yang saya gunakan untuk beraktivitas sehari-hari</p>
					</div>
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselGambar" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselGambar" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</button>
		</div>
	</div>

	<div id="aboutme" data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-smooth-scroll="true" class="tampilan2" tabindex="0">
		<div class="container">
			
		</div>
	</div>
		
	<div id="experience" data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-smooth-scroll="true" class="tampilan3" tabindex="0">
		<div class="container float-start">
			<img src="../resources/img/foto2.jpg" class="object-fit-cover">
		</div>

		<div class="row">
			<div class="col">
				<div class="teks rounded border float-end">
					<center><h1>Experience</h1></center>
					<hr>
					<p>Sharing suatu pengalaman selama perjalanan pendidikan, baik itu didalam maupun diluar pendidikan, semoga beberapa pengalaman yang saya share dapat menjadi inspirasi bagi kalian semua.</p>
					<center>
						<a class="btn" role="button" href="experience.php">View Page!</a>
					</center>
				</div>
			</div>
		</div>
	</div>

	<div id="mygear" data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-smooth-scroll="true" class="tampilan4" tabindex="0">
		<div class="row">
			<div class="col d-inline">
				<div class="teks border">
					<center><h1>Equipment</h1></center>
					<hr>
					<p>Bukan gamer, bukan juga conten creator. Equipment atau Gear yang biasa saya gunakan untuk bermain game ataupun melakukan aktivitas sehari-hari seperti mengerjakan tugas, mengedit, menonton, dan melakukan hal lainnya, saya kumpulkan dalam satu page ini.</p>
					<center>
						<a class="btn" role="button" href="equipment.php">View Page!</a>
					</center>
				</div>
			</div>

			<div class="col d-inline">
				<div class="card h-100 ms-auto">
					<img src="../resources/img/foto3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">My Gear</h5>
						<hr>
						<p class="card-text">Including device specs and other hardware!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="contact" data-bs-spy="scroll" data-bs-target="#navbar-scroll" data-bs-smooth-scroll="true" class="tampilan5" tabindex="0">
		<div class="d-flex flex-row" style="padding-top: 15px;">
			<div class="p-2">
				<p><a href="https://github.com/seeyouridan" target="_blank" class="nav-link"><i class="fa-brands fa-github fa-xl"></i></a></p>
			</div>

			<div class="p-2">
				<p><a href="https://www.youtube.com/@raflyidan" target="_blank" class="nav-link"><i class="fa-brands fa-youtube fa-xl"></i></a></p>
			</div>

			<div class="p-2">
				<p><a href="https://www.instagram.com/raflyidan_" target="_blank" class="nav-link"><i class="fa-brands fa-instagram fa-xl"></i></a></p>
			</div>
		</div>

		<div class="d-flex flex-row" style="opacity: 50%;">
			<p>©️ 2023 Rafly Maulidan, seeyouridan</p>
		</div>

		<div class="d-flex flex-row">
			<p class="perlinkan"><a href="home.html" class="nav-link">&nbsp;&nbsp; Home</a></p>
			<p class="perlinkan"><a href="experience.php" class="nav-link">&nbsp;&nbsp; Experience</a></p>
			<p class="perlinkan"><a href="equipment.php" class="nav-link">&nbsp;&nbsp; Equipment</a></p>
			<p class="perlinkan"><a href="https://discord.com/channels/977557893308088390/977825595775934474/986211529546407957" target="_blank" class="nav-link">&nbsp;&nbsp; Join my Discord</a></p>
		</div>
	</div>

	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../resources/js/script.js"></script>
</body>
</html>