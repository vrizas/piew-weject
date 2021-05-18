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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bisnis.css') }}">
</head>
<body>
    
    <!-- Navbar -->
    <div class="nav-container">
        <nav>
            <img src="{{ asset('img/home/logo.svg') }}" class="logo"><h1 class="logo-tulis">Business</h1>
            <div class="nav-menu">
                <ul>
                    @if(session()->has('login'))
                         <li class='akun'>
                            <button class='drop'><i class='bx bxs-user-circle'></i> {{ Auth::user()->name }} <i class='bx bxs-chevron-down'></i></button>
                            <div class="drop-content">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
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
    <!-- Ambil dari database -->
    @foreach($restaurants as $i => $restaurant)
    <div class="header-container" style="background-image: url('{{asset('img/bisnis_images')}}/janji-jiwa.jpg')">
        <h3 class="nama-bisnis">
        {{$restaurant->nama}}</h3>
        <h4 class="alamat">Jalan Haji Basri no. 53 Malang</h4>
        <h4 class="jam">09.00 - 20.30</h4>
        <div class="rating">
			<i class='bx bxs-star'></i>
			<i class='bx bxs-star'></i>
			<i class='bx bxs-star'></i>
			<i class='bx bxs-star'></i>
		    <i class='bx bxs-star'></i>
		<div class="rating-angka">4</div>
        <a href="business/update-business" class="edit-bisnis"><i class='bx bxs-edit'></i>Edit</a>
    </div>
    @endforeach
    <!-- ----------------- -->
    <!-- Akhir Header -->

    <!-- Content -->
    <div class="content-container">
        <!-- Ambil dari database -->
        <div class="pilihan">
            <h3 class="pilihan-tentang active">Tentang</h3>
            <h3 class="pilihan-ulasan">Ulasan</h3>
            <h3 class="pilihan-menu">Menu</h3>
        </div>
        <div class="tentang">
            <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, ipsum et dolores error ducimus inventore, libero soluta sunt nesciunt culpa, est itaque ab distinctio tempora ipsa odio ex qui. Ullam autem qui ad odio eligendi cupiditate reprehenderit incidunt dolorem labore vero atque, explicabo quam accusamus a magnam neque ea? Veniam reprehenderit alias molestias eum, voluptatibus porro modi inventore eaque libero odio maiores unde atque repudiandae praesentium? Maxime modi, a obcaecati officia esse, voluptate voluptatem quia nihil voluptates animi dolore! Vitae laudantium exercitationem est cum incidunt neque. Pariatur hic delectus quis itaque accusantium vitae a officiis, explicabo iusto recusandae eum non molestias libero! Facere sit ducimus facilis, rem est, id at exercitationem deleniti ratione itaque sequi quidem architecto veritatis obcaecati distinctio?</p>
        </div>
        <div class="ulasan">
            <div class="ulasan-wrapper">
                <!-- Ambil dari database -->
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
        <div class="menu">
            @for($i = 1; $i <= 4; $i++)    
            <div class="daftar-menu daftar-menu-{{$i}}">
                <h4 class="nama-menu">Ayam Goreng</h4>
                <img src="{{asset('img/bisnis_images')}}/nelongso.jpeg" alt="" class="menu-img">
                <p class="harga">Rp. 18.000,00</p>
                <div class="edit-delete">
                    <a href="" class="edit-menu">  <i class='bx bxs-edit'></i></a>
                    <form action="post" class="delete-menu">
                        <button type="submit"><i class='bx bxs-trash' ></i></button>
                    </form>
                </div>
            </div>
            @endfor    
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

<script src="{{ asset('js/bisnis.js') }}"></script>
</body>
</html>