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

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
	<!-- Navbar -->
	<div class="nav-container">
		<nav>
			<img src="{{ asset('img/home/logo.svg') }}" class="logo">
			<div class="nav-menu">
				<ul>
					<li><a href="#">TENTANG KAMI</a></li>
					<li><a href="#">TULIS REVIEW</a></li>
					{{-- @if($request->session()->regenerate()){ --}}

					
					 <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
					{{-- @else --}}
					<li><a href="login"><i class='bx bx-log-in'></i> MASUK</a></li>
					<li><a href="#"></i><i class='bx bxs-user-plus'></i> DAFTAR</a></li>
					{{-- @endif --}}
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
	<!-- Akhir Footer -->

</body>

</html>