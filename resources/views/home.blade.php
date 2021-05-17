<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Piew</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

	<!-- BoxIcons -->
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<!--Fullpage-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" integrity="sha512-hDXpx6vRwBR+f4rnj8BDQRpwfi4lvztz1KPkBPCG2XkTKiJ5Y6zq7/NsDmJRIQbquKchG0DVc6gmZiOE0ZXrvg==" crossorigin="anonymous" />

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
	<!-- Navbar -->
	<div id="fullPage">
		<div class="section">
			<div class="nav-container">
				<nav>
					<img src="{{ asset('img/home/logo.svg') }}" class="logo">
					<div class="nav-menu">
						<ul>
							<li><a href="About">TENTANG KAMI</a></li>
							<li><a href="#">TULIS REVIEW</a></li>
							<li><a href="login"><i class='bx bx-log-in'></i> MASUK</a></li>
							<li><a href="#"></i><i class='bx bxs-user-plus'></i> DAFTAR</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<!-- Akhir Navbar -->

			<!-- Header -->
			<div class="header-container">
				<header>
					<h1>TEMUKAN</h1>
					<h4>makanan enak tersembunyi di sekitarmu</h4>
					<form action="" method="POST">
						<input type="text" class="ket ket-1" placeholder="Cari" disabled>
						<input class="search-box-1" type="text" placeholder="restoran,warung,makanan..">
						<input type="text" class="ket ket-2" placeholder="Lokasi" disabled>
						<input class="search-box-2" type="text" placeholder="Malang,Jawa Timur">
						<button type="submit"><i class='bx bx-search'></i></button>
					</form>
				</header>
				<p>Rekomendasi</p>
				<a href="#content">
					<div class="tombol-rekomendasi"><i class='bx bxs-chevron-down'></i></div>
				</a>
			</div>
			<!-- Akhir Header -->
		</div>
		<div class="section">
			<!-- Konten Rekomendasi -->
			<div class="content-container" id="content">
				<div class="content-pilihan-kami">
					<h3>PILIHAN KAMI</h3>
					<div class="content-pilihan-kami-wrapper">
						@foreach($restaurants as $i => $restaurant)

						<div class="img-wrapper-{{ $i }}">
							<!-- Ambil dari Database -->
							<p><a href="#" class="nama-resto">{{$restaurant->nama}}</a></p>
							<a href="#"><img src="{{asset('img/bisnis_images')}}/{{$restaurant->image}}" alt="{{$restaurant->nama}}"></a>
							<div class="rating">
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<div class="rating-angka">{{$restaurant->rating}}</div>
								<!-- ------------------- -->
							</div>
						</div>
						@endforeach
					</div>
					<a href="#" class="link-pencarian">Lihat Lebih Banyak</a>
				</div>
				<div class="content-random">
					<h3>MASAKAN PADANG</h3>
					<div class="content-random-wrapper">
						@foreach($restaurants as $i => $restaurant)
						<div class="img-wrapper-{{ $i }}">
							<!-- Ambil dari Database -->
							<p><a href="#" class="nama-resto">{{$restaurant->nama}}</a></p>
							<a href="#"><img src="{{asset('img/bisnis_images')}}/{{$restaurant->image}}" alt="{{$restaurant->nama}}"></a>
							<div class="rating">
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<div class="rating-angka">{{$restaurant->rating}}</div>
								<!-- ------------------- -->
							</div>
						</div>
						@endforeach
					</div>
					<a href="#" class="link-pencarian">Lihat Lebih Banyak</a>
				</div>
			</div>
			<!-- Akhir Konten Rekomendasi -->

			<!-- Footer -->
			<div class="footer-container">
				<footer>
					<div class="sosmed">
						<i class='bx bxl-instagram'></i>
						<i class='bx bxl-facebook-square'></i>
						<i class='bx bxl-twitter'></i>
					</div>
					<p><i class='bx bx-copyright'></i> 2021 By Weject.</p>
				</footer>
			</div>
		</div>
	</div>
	<!-- Akhir Footer -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js" integrity="sha512-+m1+m9XBnZXowk9jSNIlZYgtOPTIu6aUHha/4/3dk84PQcpWgrNd4/zKmOYno0BQK9nuJ6WgYBnuPqCrmvMNtg==" crossorigin="anonymous"></script>
	<script>
		new fullpage('#fullPage', {
			autoScrolling: true
		})
	</script>
</body>

</html>