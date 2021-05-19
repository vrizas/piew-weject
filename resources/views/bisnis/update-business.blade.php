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
            <img src="{{ asset('img/home/logo.svg') }}" class="logo"><h1 class="logo-tulis">Business</h1>
            <div class="nav-menu">
                <ul>
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

    <!-- Content -->
    <div class="content-container">
        <form action="/business/{{$restaurant->id}}" method="POST" class="form" enctype ="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$restaurant->id}}">
            <label for="nama">Nama Bisnis</label>
            <input type="text" name="nama" value="{{$restaurant->nama}}">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat">
            <label for="id_location">Kota</label>
            <select name="id_location" id="id_location">
                @foreach($locations as $location)
                <option value="{{$location->id}}">{{$location->kota}}, {{$location->provinsi}}</option>
                @endforeach  
            </select>
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" placeholder="kategori digunakan untuk pencarian">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
            <label for="image">Unggah foto</label>
            <input type="file" name="image">
            <input type="submit" value ="Simpan">
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
    
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>