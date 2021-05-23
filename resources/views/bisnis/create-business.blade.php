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
    <link rel="stylesheet" href="{{ asset('css/update-bisnis.css') }}">
</head>

<body>
    <!-- Navbar -->
    <div class="nav-container">
        <nav>
            <a href="/"><img src="{{ asset('img/logo.png') }}" class="logo"></a>
            <div class="nav-menu">
                <ul>
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
                    <script>
                        window.location = "/login";
                    </script>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <div class="content-container">
        <h1>Buatlah Bisnismu</h1>
        <form action="/business/{{$restaurant->id}}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$restaurant->id}}">
            <label for="nama">Nama Bisnis</label>
            <input type="text" name="nama" value="{{$restaurant->nama}}">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat">
            <label for="id_location">Kota</label>
            <select name="id_location" id="id_location">
                @foreach($locations as $location)
                <option value="{{$location->id}}">{{$location->lokasi}}</option>
                @endforeach
            </select>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" placeholder="kategori digunakan untuk pencarian">
            <label for="jam-buka">Jam Buka</label>
            <input type="time" name="jamBuka">
            <label for="jam-tutup">Jam Tutup</label>
            <input type="time" name="jamTutup">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
            <label for="image">Unggah foto</label>
            <input type="file" name="image">
            <input type="submit" value="Simpan">
        </form>
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
</body>

</html>