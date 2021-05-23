<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/update-menu.css')}}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- BoxIcons -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <!-- Navbar -->
  <div class="nav-container">
    <nav>
      <a href="/"><img src="{{ asset('img/home/logo.svg') }}" class="logo"></a>
      <h1 class="logo-tulis">Business</h1>
      <div class="nav-menu">
        <ul>
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
          <script>window.location = "/login";</script>
          @endif
        </ul>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!-- Content -->
  <div class="content-container">
    <img src="{{asset('img/menu/2.png')}}" alt="">
    <form method="POST" class="form">
      <label for="nama">Nama Makanan</label>
      <input type="text" name="nama">
      <label for="harga">Harga Menu</label>
      <input type="text" name="harga">
      <label for="catatan">Catatan</label>
      <textarea type="text" name="catatan" placeholder="anda dapat memberikan catatan tambahan seperti promo dan sebagainya." cols="30" rows="10"></textarea>
      <label for="image">Unggah foto</label>
      <input type="file" name="image">
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