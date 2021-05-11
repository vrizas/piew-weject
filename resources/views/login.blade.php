<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Piew</title>
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>

  <!-- Navbar -->
  <div class="nav-container">
    <nav>
      <img src="{{ asset('img/home/logo.svg') }}" class="logo">
      <div class="nav-menu">
        <ul>
          <li><a href="#">TENTANG KAMI</a></li>
          <li>
            <form action="" method="POST">
              <input class="search-box-1" type="text" placeholder="restoran,warung,makanan..">
              <input class="search-box-2" type="text" placeholder="Malang,Jawa Timur">
              <button type="submit"><i class='bx bx-search'></i></button>
            </form>
          </li>
          <li><a href="#">TULIS REVIEW</a></li>
          <li><a href="login"><i class='bx bx-log-in'></i> MASUK</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!-- MAIN CONTENT -->
  <main>
    <div class="login-box">
      <h2>LOGIN</h2>
      <!-- <img src="#" width="450" height="300"> -->
      <div class="login-child">
        <label for="name">Username</label>
        <input type="text" placeholder="Username">
        <label for="name">Password</label>
        <input type="password" placeholder="Password">
      </div>
      <button><a href="home.html">Login</a></button>
      <p>Don't have an account?<a href="signup.html" style="color: yellow;"> Register.</a></p>
    </div>
  </main>
</body>

</html>