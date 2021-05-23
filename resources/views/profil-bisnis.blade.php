<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piew</title>
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
            <a href="/"><img src="{{ asset('img/logo.png') }}" class="logo"></a>
            <div class="nav-menu">
                <ul>
                    <li class="form-pencarian">
                        <form class="cari" action="{{url('/search')}}" method="GET" role="search">
                            @csrf
                            <input type="text" class="ket ket-1" placeholder="Cari" disabled>
                            <input class="search-box-1" name="kategori" type="text" placeholder="restoran,warung,makanan.." autocomplete="off">
                            <input type="text" class="ket ket-2" placeholder="Lokasi" disabled>
                            <input class="search-box-2" name="lokasi" type="text" value="Malang, Jawa Timur" autocomplete="off">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </li>
                    <li class="menu-out"><a href="{{url('registerBusiness')}}">DAFTARKAN BISNISMU</a></li>
                    @if(session()->has('login'))
                    <li class='akun'>
                        @if(strlen(Auth::user()->name)>7)
                        <button class='drop'><i class='bx bxs-user-circle'></i> {{ substr(strip_tags(Auth::user()->name),0,7) }} <i class='bx bxs-chevron-down'></i></button>
                        @else
                        <button class='drop'><i class='bx bxs-user-circle'></i> {{ Auth::user()->name }} <i class='bx bxs-chevron-down'></i></button>
                        @endif
                        <div class="drop-content">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit"><i class='bx bx-log-out'></i> Keluar</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li class="menu-out"><a href="{{url('login')}}"><i class='bx bx-log-in'></i> MASUK</a></li>
                    <li class="menu-out"><a href="{{url('register')}}"></i><i class='bx bxs-user-plus'></i> DAFTAR</a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Header -->
    <div class="header-container" style="background-image: url('{{asset('img/bisnis_images')}}/{{$restaurant->image}}')">
        <div class="isi-header-1">
            <h3 class="nama-bisnis">{{$restaurant->nama}}</h3>
            <h4 class="alamat">{{$restaurant->alamat}}</h4>
            <h4 class="jam">09.00 - 20.30</h4>
        </div>
        <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <div class="rating-angka">{{$restaurant->rating}}</div>
        </div>
    </div>

    <!-- Akhir Header -->

    <!-- Content -->
    <div class="content-container">
        <div class="content-wrapper">
            <!-- Ambil dari database -->
            <div class="tombol">
                <a href="#ulasan" class="tombol-tulis-ulasan">Tulis Ulasan</a>
                <a href="#" class="tombol-share"><i class='bx bxs-share'></i> Bagikan</a>
            </div>
            <div class="tentang">
                <p class="deskripsi">blablabla</p>
            </div>
            <div class="menu">
                <h3>Menu</h3>
                <div class="menu-wrapper">
                    @foreach($menus as $i => $menu) 
                    <div class="daftar-menu daftar-menu-{{$i}}">
                        <h4 class="nama-menu">{{$menu->nama}}</h4>
                        <img src="{{asset('storage')}}/{{$menu->image}}" alt="{{$menu->nama}}" class="menu-img">
                        <p class="harga">Rp {{$menu->harga}}</p>
                    </div>
                    @endforeach
            </div>
        </div>
        <div class="ulasan" id="ulasan">
            <h3>Ulasan</h3>
            <div class="ulasan-wrapper">
                <!-- Ambil dari database -->
                @if(!$cek)
                <div class="form-ulasan">
                    <form action="/profile/{{$restaurant->id}}" method="POST">
                        @csrf
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
                                <p class="user">Oleh Anda</p>
                            </span>
                        </div>
                        <div class="pesan">
                            <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="masukkan pesan"></textarea>
                        </div>
                        <input type="submit" name="kirim" value="Kirim">
                    </form>
                </div>
                @endif
                @foreach($ratings as $i =>$rating)
                <div class="ulasan-orang ulasan-ke-{{$i+1}}">
                    <div class="ket-ulasan">
                        <p class="foto-user"><i class='bx bxs-user-circle'></i></p>
                        <span class="rating-wrapper">
                            <div class="rating">
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <i class='bx bx-star'></i>
                                <div class="rating-angka-ke{{$i+1}}" hidden>{{$rating->rating}}</div>
                            </div>
                            <p class="user">Oleh {{$rating->name}} ({{ \Carbon\Carbon::parse($rating->created_at)->diffForHumans() }})</p>
                        </span>
                    </div>
                    <div class="pesan">
                        <p>{{$rating->pesan}}</p>
                    </div>
                </div>
                @endforeach
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
    <script src="{{ asset('js/akun.js') }}"></script>
    <script src="{{ asset('js/profil-bisnis.js') }}"></script>
    <script src="{{ asset('js/rating.js') }}"></script>
</body>

</html>