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
                    <li><a href="#">TENTANG KAMI</a></li>
                    <li><a href="#">TULIS REVIEW</a></li>
                    @if(session()->has('login'))
                    <li class='akun'>
                        <button class='drop'><i class='bx bxs-user-circle'></i> {{ Auth::user()->name }} <i class='bx bxs-chevron-down'></i></button>
                        <div class="drop-content">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button style="font-size:.96rem;opacity:0;cursor:default;">{{ Auth::user()->name }}</button><br>
                                <button type="submit"><i class='bx bx-log-out'></i> Keluar</button>
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
    <?php $a = 0 ?>
    <div class="lokasi">
        @foreach($locations as $location)
        <!-- <h1>Lokasi</h1> -->
        <h1>Hasil Pencarian di {{$location->lokasi}}</h1>
        @endforeach
    </div>
    <div class="nama-container">
        @foreach($restaurants as $i => $restaurant)
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
                    <h1>Hasil Pencarian {{$i+1}}</h1>
                </div>
                <div class="nama-restaurant">
                    <p>nama : {{$restaurant->nama}}</p>
                    <p>rating : {{$restaurant->rating}}</p>
                    <p>kategori : {{$restaurant->kategori}}</p>
                    <p>deskripsi :</p>
                    <p>{{$restaurant->deskripsi}}</p>
                </div>
            </div>
        </div>
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
</body>

</html>