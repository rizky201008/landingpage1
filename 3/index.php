<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/logofav.ico">
  <!-- End Favicon -->

  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
  <!-- End Bootstrap Icons -->

  <style>
    @font-face {
      font-family: alfa-slab-one;
      src: url('./assets/font/AlfaSlabOne-Regular.ttf');
    }

    @font-face {
      font-family: koulen;
      src: url('./assets/font/Koulen-Regular.ttf');
    }

    @font-face {
      font-family: akshar;
      src: url('./font/Akshar-VariableFont_wght.ttf');
    }

    body {
      user-select: none;
    }

    .jumbotron {
      padding-top: 6rem;
      background-color: #e2edff;
    }

    section {
      padding-top: 6rem;
    }

    h1 {
      font-family: alfa-slab-one;
    }

    h2 {
      font-family: alfa-slab-one;
    }

    p {
      font-family: akshar;
    }

    #featured {
      background-color: #2155CD;
    }

    #keunggulan {
      background-color: #82DBD8;
    }

    #contact {
      background-color: #000000;
    }

    footer {
      background-color: #ffff;
      padding-bottom: 2rem;
    }
  </style>
</head>

<body oncontextmenu="return false" oncopy="return false" oncut="return false">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="">Vixiloc</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#featured">Featured</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#keunggulan">Keunggulan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Jumbotron class -->
  <div class="jumbotron text-center md" id="home">
    <img class="justify-content-center img-fluid" style="width: 800px" src="./assets/img/jumbotron.webp" alt="main-image">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,256L26.7,224C53.3,192,107,128,160,117.3C213.3,107,267,149,320,186.7C373.3,224,427,256,480,240C533.3,224,587,160,640,144C693.3,128,747,160,800,186.7C853.3,213,907,235,960,250.7C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,101.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </div>
  <!-- End Jumbotron class -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Us</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
        <div class="col-md-8">
          <p>
            Hai senang bertemu dengan anda, tak kenal maka tak sayang oleh
            karena itu mari kita berkenalan agar kita bisa saling mengenal
            lebih lanjut. Perkenalkan Vixiloc website canggih tempat beli
            pulsa, paket data internet, paket data sms dan telpon, voucher
            digital, topup game online dan masih banyak lagi. Vixiloc dibangun
            pada tahun 2022 tepatnya pada tanggal 20 Februari dengan
            menggunakan extensi domain .my.id.
          </p>
          <p>
            Anda mungkin pernah membeli pulsa di website atau aplikasi selain
            Vixiloc, lantas apa yang menjadi pembeda antara Vixiloc dan
            website lainnya?. Kami hadir dengan teknologi super canggih dan
            juga harga yang murah meriah daripada website atau aplikasi
            lainnya. Kami berfokus pada produk game seperti diamond, credit,
            item yang bisa anda nikmati dengan harga yang super fantastis
            murah nya. Anda tidak perlu khawatir karena semua produk kami
            legal untuk digunakan dan anti banned.
          </p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#2155CD" fill-opacity="1"
        d="M0,256L26.7,224C53.3,192,107,128,160,117.3C213.3,107,267,149,320,186.7C373.3,224,427,256,480,240C533.3,224,587,160,640,144C693.3,128,747,160,800,186.7C853.3,213,907,235,960,250.7C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,101.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End About -->

  <!-- My Featured -->
  <section id="featured">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="text-white mb-3">Produk Game Unggulan</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                Free Fire
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                Mobile Legend
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                PUBG Mobile
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                Genshin Impact
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                Call Of Duty Mobile
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top" src="./assets/img/javier-martinez-hUD0PUczwJQ-unsplash.jpg"
              alt="Card image cap" />
            <div class="card-body">
              <p class="card-text text-center">
                Point Blank
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#82DBD8" fill-opacity="1"
        d="M0,256L26.7,224C53.3,192,107,128,160,117.3C213.3,107,267,149,320,186.7C373.3,224,427,256,480,240C533.3,224,587,160,640,144C693.3,128,747,160,800,186.7C853.3,213,907,235,960,250.7C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,101.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
    </div>
  </section>
  <!-- End Featured -->

  <!-- Keunggulan -->
  <section id="keunggulan">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2 class="text-white mb-5">Keunggulan Kami</h2>
        </div>
      </div>
      <div class="row justify-content-center text-white mb-5">
        <div class="col-md-4 mb-3">
          <div class="card bg-info">
            <div class="card-body">
              <h1 class="card-text text-center">
                Aman
              </h1>
              <p class="card-text text-center">
                Keamanan bertransaksi adalah keutamaan kami
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card bg-info">
            <div class="card-body">
              <h1 class="card-text text-center">
                Cepat
              </h1>
              <p class="card-text text-center">
                Transaksi diproses secara instan
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card bg-info">
            <div class="card-body">
              <h1 class="card-text text-center">
                Non-Stop
              </h1>
              <p class="card-text text-center">
                Transaksi kapan saja 24 jam lancar
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <h2 class="text-primary mb-3">Di Gunakan Oleh 1000 Orang</h2>
        <h2 class="text-primary">Menyelesaikan Hingga 10000 Transaksi</h2>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#000000" fill-opacity="1"
        d="M0,256L26.7,224C53.3,192,107,128,160,117.3C213.3,107,267,149,320,186.7C373.3,224,427,256,480,240C533.3,224,587,160,640,144C693.3,128,747,160,800,186.7C853.3,213,907,235,960,250.7C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,101.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Keunggulan -->

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-md">
          <h1>Butuh bantuan?</h1>
        </div>
      </div>
      <div class="row text-center text-white justify-content-center">
        <div class="col-md-5">
          <a href="https://wa.me/6281232435871"><i class="bi bi-whatsapp text-success"
              style="font-size: 100px;"></i></a>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,256L26.7,224C53.3,192,107,128,160,117.3C213.3,107,267,149,320,186.7C373.3,224,427,256,480,240C533.3,224,587,160,640,144C693.3,128,747,160,800,186.7C853.3,213,907,235,960,250.7C1013.3,267,1067,277,1120,240C1173.3,203,1227,117,1280,101.3C1333.3,85,1387,139,1413,165.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- End Contact -->

  <!-- Footer -->
  <footer class="text-center">
    <p class="text-dark">Created With <i class="bi bi-heart-fill text-danger"></i> By <a class="text-dark"
        href="">Vixiloc Team</a></p>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>

</html>