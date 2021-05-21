<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piew Business</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/profil-bisnis.css') }}">
</head>
<body>
    <!-- Navbar -->
	<div class="nav-container">
		<nav>
			<img src="{{ asset('img/home/logo.svg') }}" class="logo">
			<div class="nav-menu">
				<ul>
					<li><a href="registerBusiness">DAFTARKAN BISNISMU</a></li>
					@if(session()->has('login'))
						<li class='akun'>
							<button class='drop'><i class='bx bxs-user-circle'></i> {{ Auth::user()->name }} <i class='bx bxs-chevron-down'></i></button>
							<div class="drop-content">
								<form id="logout-form" action="{{ route('logout') }}" method="POST">
									@csrf
									<button style="font-size:.96rem;opacity:0;cursor:default;">{{ Auth::user()->name }}</button><br>
									<button type="submit"><i class='bx bx-log-out' ></i> Keluar</button>
								</form>
							</div>
						</li>
					@else
						<li><a href="login"><i class='bx bx-log-in'></i> MASUK</a></li>
						<li><a href="register"></i><i class='bx bxs-user-plus'></i> DAFTAR</a></li>
					@endif
				</ul>
			</div>
		</nav>
	</div>
	<!-- Akhir Navbar -->

    <!-- Header -->
    
    <div class="header-container" style="background-image: url('{{asset('img/bisnis_images')}}/ayam.jpg')">
        <div class="isi-header-1">
            <h3 class="nama-bisnis">Ayam Bakar</h3>
            <h4 class="alamat">Jalan Sudirman</h4>
            <h4 class="jam">09.00 - 20.30</h4>
        </div>
        <div class="rating">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <div class="rating-angka">4</div>
        </div>
        <a href="" class="edit-bisnis"><i class='bx bxs-edit'> </i> Edit</a>
    </div>
   
    <!-- Akhir Header -->

    <!-- Content -->
    <div class="content-container">
    <div class="content-wrapper">
        <!-- Ambil dari database -->
        <div class="tombol">
            <a href="#ulasan" class="tombol-tulis-ulasan">Tulis Ulasan</a>
            <a href="#" class="tombol-share"><i class='bx bxs-share' ></i> Bagikan</a>
        </div>
        <div class="tentang">
            <p class="deskripsi">blablabla</p>
        </div>
        <div class="menu">
            <h3>Menu</h3>
            <div class="menu-wrapper">
            @for($i = 1; $i <= 4; $i++) 
            <div class="daftar-menu daftar-menu-{{$i}}">
                <h4 class="nama-menu">Ayam Goreng</h4>
                <img src="{{asset('img/bisnis_images')}}/ayam.jpg" alt="" class="menu-img">
                <p class="harga">Rp. 18.000,00</p>
            </div>
            @endfor
            </div>
        </div>
        <div class="ulasan" id="ulasan">
            <h3>Ulasan</h3>
            <div class="ulasan-wrapper">
                <!-- Ambil dari database -->
                <div class="form-ulasan">
                    <form action="" method="POST">
                    <div class="ket-ulasan">
                        <p class="foto-user"><i class='bx bxs-user-circle'></i></p>
                        <span class="rating-wrapper">
                            <div class="rating" id="form-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <input type="hidden" class="rating-angka" name="rating">
                            </div>
                            <p class="user">Oleh Basri (17 April 2021)</p>
                        </span>
                    </div>
                    <div class="pesan">
                        <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="masukkan pesan"></textarea>
                    </div>
                    <input type="submit" name="kirim" value="Kirim">
                    </form>
                </div>
                @for($i = 1; $i <= 6; $i++) 
                <div class="ulasan-orang ulasan-ke-{{$i}}">
                    <div class="ket-ulasan">
                        <p class="foto-user"><i class='bx bxs-user-circle'></i></p>
                        <span class="rating-wrapper">
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <div class="rating-angka" hidden>4</div>
                            </div>
                            <p class="user">Oleh Basri (17 April 2021)</p>
                        </span>
                    </div>
                    <div class="pesan">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam delectus consectetur magnam vitae iusto quasi libero eligendi obcaecati ex et.</p>
                    </div>
                </div>
                @endfor
                <!-- ----------------- -->
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Content -->

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

<script src="{{ asset('js/profil-bisnis.js') }}"></script>
</body>
</html>