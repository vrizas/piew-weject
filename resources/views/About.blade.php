<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css" integrity="sha512-hDXpx6vRwBR+f4rnj8BDQRpwfi4lvztz1KPkBPCG2XkTKiJ5Y6zq7/NsDmJRIQbquKchG0DVc6gmZiOE0ZXrvg==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{asset('css/About.css')}}">
</head>

<body>
  <!-- Navbar -->
  <div class="nav-container">
    <nav>
      <a href="/"><img src="{{ asset('img/logo.png') }}" class="logo"></a>
    </nav>
  </div>
  <!-- Akhir Navbar -->



  <div id="fullPage">
    <div class="section">
      <div class="header-container">
        <header>
          <div class="Penjelasan1" data-aos="fade-left">
            <h1>Apa itu PIEW?</h1>
            <p>Piew merupakan sebuah aplikasi yang diciptakan untuk mempermudah proses pencarian lokasi kuliner yang sesuai dengan keinginan pengguna.
              Aplikasi kami dilengkapi dengan fitur untuk mengulas lokasi kuliner yang telah terdaftar pada aplikasi kami, sehingga calon konsumen mengetahui bagaimana impresi orang-orang terhadap lokasi kuliner tersebut.
            </p>
          </div>
          <div class="logo1" data-aos="fade-left">
            <img src="{{ asset('img/About/S4_Cafe2.png') }}" alt="">
          </div>
        </header>
      </div>
    </div>
    <div class="section">
      <div class="Mid-container">
        <header>
          <div class="logo2">
            <img src="{{ asset('img/About/target.png') }}" alt="">
          </div>
          <div class="Penjelasan2">
            <h1>Tujuan Kami</h1>
            <p>Dengan adanya platform ini kami bertujuan untuk membantu mengenalkan lokasi kuliner yang mungkin belum diketahui banyak orang. Dengan harapan para pemilik usaha dapat mengembangkan bisnisnya.
            </p>
          </div>
        </header>
      </div>
    </div>
    <div class="section">
      <div class="Bot-container">
        <header>
          <div class="Penjelasan3">
            <h1>Mulai Mengulas</h1>
            <a href="search?_token=Wb7nGf5KJvl1POIq1MeO61LLOJgwB0DXmQZqOtAV&kategori=ayam&lokasi=Malang%2C+Jawa+Timur" class="tombol">Tulis Review</a>
          </div>
          <div class="logo3">
            <img src="{{ asset('img/About/S4_Cafe1.png') }}" alt="">
          </div>
        </header>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js" integrity="sha512-+m1+m9XBnZXowk9jSNIlZYgtOPTIu6aUHha/4/3dk84PQcpWgrNd4/zKmOYno0BQK9nuJ6WgYBnuPqCrmvMNtg==" crossorigin="anonymous"></script>
  <script>
    new fullpage('#fullPage', {
      autoScrolling: true
    })
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>