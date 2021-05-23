<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/pencarian.css')}}">
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
                    <li class="menu-out"><a href="registerBusiness">DAFTARKAN BISNISMU</a></li>
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
                    <li class="menu-out"><a href="login"><i class='bx bx-log-in'></i> MASUK</a></li>
                    <li class="menu-out"><a href="register"></i><i class='bx bxs-user-plus'></i> DAFTAR</a></li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->
    <?php $a = 0 ?>
    <div class="lokasi">
        @foreach($locations as $location)
        <!-- <h1>Lokasi</h1> -->
        <h1>Hasil Pencarian di {{$location->lokasi}}</h1>
        @endforeach
    </div>
    <div class="nama-container">
        @foreach($restaurants as $i => $restaurant)
        <a class="pitet" href="/profile/<?php echo $i + 1 ?>">
            <?php $a++ ?>
            <div class="hasil-pencarian">
                <div class="gambar-alamat">
                    <div class="gambar">
                        <img src="{{asset('img/bisnis_images')}}/{{$restaurant->image}}" alt="">
                    </div>
                    <div class="alamat">
                        <p>{{$restaurant->alamat}}</p>
                    </div>
                </div>
                <div class="nomor-nama">
                    <div class="Cari">

                    </div>
                    <div class="nama-restaurant">
                        <p>Nama : {{$restaurant->nama}}</p>
                        <p>Rating : {{$restaurant->rating}}</p>
                        <p>Kategori : {{$restaurant->kategori}}</p>
                        <p>Deskripsi :</p>
                        <p>{{$restaurant->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <div class="jumlah">
            <p>Menampilkan <?php echo $a ?> hasil </p>
        </div>
    </div>



    <!-- Footer -->
    <div class="footer-container">
        <footer>
            <div class="bawah">
                <div class="sosmed">
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-facebook-square'></i>
                    <i class='bx bxl-twitter'></i>
                </div>
                <p><i class='bx bx-copyright'></i> 2021 By Weject.</p>
            </div>
        </footer>
    </div>
    <!-- Akhir Footer -->

    <script src="{{ asset('js/akun.js') }}"></script>
</body>

</html>