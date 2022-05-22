<?php
include 'config.php';
//Total Pengguna
$user = $con->query("SELECT * FROM `users`");
$total_user = mysqli_num_rows($user);

//Total Pesanan
$pesanan = $con->query("SELECT * FROM `semua_pembelian`");
$total_order = mysqli_num_rows($pesanan);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      @font-face {
        font-family: Alfa-Slab-One;
        src: url('./assets/font/AlfaSlabOne-Regular.ttf');
      }
      @font-face {
        font-family: Koulen;
        src: url('./assets/font/Koulen-Regular.ttf');
      }
      body{
        background-color: #00C2FF;
      }
      a{
        text-decoration: none;
        color: white;
      }
        nav{
            background-color: #00B9F3;
            width: 100%;
            box-shadow: 0px 5px 50px #0094C2;
        }
        .nav-link{
            font-size: 20px;
            /* font-family: 'Alfa Slab One'; */
            margin-left: 10px;
        }
        .nav-link, .button{
            border-radius: 20px;
        }
        .container{
          position: relative;
        }
        .textutama{
          color: white;
          font-family: Alfa-Slab-One;
          font-size: 100px;
          width: 849px;
          margin-top: 100px;
        }
        .textutama1{
          color: white;
          font-family: Alfa-Slab-One;
          font-size: 100px;
          width: 849px;
          margin-top: -50px;
        }
        .textutama2{
          color: rgb(0, 81, 255);
          font-family: Alfa-Slab-One;
          font-size: 100px;
          margin-top: -50px;
        }
        .img1{
          height: 300px;
          margin-left: -150px;
          margin-top: 60px;
        }
        .trust{
          width: 100%;
          background-color: #00AAE0;
          position: relative;
          height: 150px;
        }
        .txt-trust{
          font-size: 48px;
          font-family: Alfa-Slab-One;
          color: white;        
          position: absolute;
          margin-left: 50px;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .txt-trust1{
          font-size: 48px;
          font-family: Alfa-Slab-One;
          color: #EBFF00;        
          position: absolute;
          top: 50%;
          margin-left: 500px;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .txt-trust2{
          font-size: 48px;
          font-family: Alfa-Slab-One;
          color: #EBFF00;        
          position: absolute;
          top: 50%;
          margin-left: 800px;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .about-us{
          background-color: #9BE7FF;
          width: 100%;
          position: relative;
          padding: 5%;
        }
        .card-about{
          background-color: #00C2FF;
          border-radius: 30px;
          width: 100%;
        }
        .txt-about1{
          font-size: 100px;
          font-family: Alfa-Slab-One;
          color: white;
        }
        .txt-about2{
          font-size: 20px;
          font-family: Koulen;
          color: white;
          text-align: justify;
          width: 95%;
        }
        .contact-us{
          background-color: #00B9F3;
          width: 100%;
          position: relative;
          height: 600px;
        }
        .txt-contact{
          color: white;
          font-family: Alfa-Slab-One;
          font-size: 42px;
          padding-top: 30px;
        }
        .card-contact{
          background-color: #9BE7FF;
          border-top-right-radius: 30px;
          border-bottom-right-radius: 30px;
          width: 500px;
          height: 355px;
          position: absolute;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact img{
          height: 200px;
          position: absolute;
          left: 70px;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact1{
          width: 500px;
          height: 100px;
          position: absolute;
          right: 100px;
          border-radius: 50px;
          background-color: #ffff;
          box-shadow: 0px 5px 20px #000000;
          top: 30%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact1 p{
          font-size: 42px;
          font-family: Alfa-Slab-One;
          color: black;
          position: absolute;
          text-align: center;
          left: 0px;
          right: 0px;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact2{
          width: 500px;
          height: 100px;
          box-shadow: 0px 5px 20px #000000;
          position: absolute;
          right: 60px;
          border-radius: 50px;
          background-color: #ffff;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact2 p{
          font-size: 42px;
          font-family: Alfa-Slab-One;
          color: black;
          position: absolute;
          text-align: center;
          left: 0px;
          right: 0px;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact3{
          width: 500px;
          height: 100px;
          position: absolute;
          right: 20px;
          box-shadow: 0px 5px 20px #000000;
          border-radius: 50px;
          background-color: #ffff;
          top: 70%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .card-contact3 p{
          font-size: 42px;
          font-family: Alfa-Slab-One;
          color: black;
          position: absolute;
          text-align: center;
          left: 0px;
          right: 0px;
          top: 50%;
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        .follow-us{
          position: relative;
          background-color: #0094FF;
          width: 100%;
          height: 600px;
        }
        .follow-us p{
          text-align: center;
          color: white;
          font-size: 42px;
          font-family: Alfa-Slab-One;
          position: absolute;
          left: 0px;
          right: 0px;
          padding-top: 30px;
        }
        .follow-item{
          position: absolute;
          margin-top: 200px;
          width: 100%;
        }
        .follow-item img{
          width: 200px;
        }
        .follow-item img:hover{
          width: 250px;
        }
        .footer{
          background-color: #0094C2;
          width: 100%;
          height: 100px;
          position: relative;
        }
        .txt-footer{
          color: white;
          font-family: Koulen;
          font-size: 20px;
          text-align: center;
          padding-top: 40px;
        }
    </style>
    <title>Homepage</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Vixiloc</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container">
                <ul class="navbar-nav float-end">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#follow">Ikuti Kami</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link button btn-primary active" href="#">Daftar Sekarang</a>
                    </li>
                  </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="container">
        <table>
          <tr>
            <td>
              <p class="textutama">Topup Game</p>
        <p class="textutama1">Online</p>
        <p class="textutama2">Terbaik</p>
            </td>
            <td>
              <img class="img1" src="./assets/img/undraw_gaming_re_cma2.svg" alt="gameconsole">
            </td>
          </tr>
        </table>
      </div>

      <div class="trust">
        <p class="txt-trust">Dipercaya Oleh:</p><p class="txt-trust1"><?php echo $total_user?> User</p><p class="txt-trust2"><?php echo $total_order?> Transaksi</p>
        <p id="about"></p>
      </div>
        <div class="about-us">
          <center>
          <div class="card-about">
            <center>
              <p class="txt-about1">Apa Itu Vixiloc?</p>
              <p class="txt-about2">
                Hai senang bertemu dengan anda, tak kenal maka tak sayang oleh karena itu mari kita berkenalan agar kita bisa saling mengenal lebih lanjut.
                Perkenalkan Vixiloc website canggih tempat beli pulsa, paket data internet, paket data sms dan telpon, voucher digital, topup game online dan
                masih banyak lagi. Vixiloc dibangun pada tahun 2022 tepatnya pada tanggal 20 Februari dengan menggunakan extensi domain .my.id. Anda mungkin pernah
                membeli pulsa di website atau aplikasi selain Vixiloc, lantas apa yang menjadi pembeda antara Vixiloc dan website lainnya?. Kami hadir dengan
                teknologi super canggih dan juga harga yang murah meriah daripada website atau aplikasi lainnya. Kami berfokus pada produk game seperti diamond, credit, item 
                yang bisa anda nikmati dengan harga yang super fantastis murah nya. Anda tidak perlu khawatir karena semua produk kami legal untuk digunakan dan anti banned.
              </p><br>
            </center>
          </div>
          </center>
        </div>

        <div class="contact-us">
          <center>
            <p class="txt-contact" id="contact">
              Ada Yang Bisa Kami Bantu?
            </p>
          </center>
          <div class="card-contact float-start">
            <img src="./assets/img/undraw_business_chat_re_ro2e.svg" alt="contact-us-img">
          </div>
          <a href="https://wa.me/6281232435871">
          <div class="card-contact1">
              <p>Whatsapp</p>
          </div>
          </a>
          <a href="https://t.me/vixilocmyid">
          <div class="card-contact2">
          <p>Telegram</p>
          </div>
          </a>
          <a href="mailto:admin@vixiloc.my.id">
          <div class="card-contact3">
          <p>Email</p>
          </div>
          </a>
        </div>

        <div class="follow-us">
        <p id="follow">Follow Us</p>
          <center>
          <div class="follow-item">
            <table>
              <tr>
                <td>
                  <a href="https://instagram.com/vixiloc" target="blank"><img src="./assets/img/instagram.svg" alt="instagram"></a>
                </td>
                <td>
                  <a href="https://www.tiktok.com/@vixiloc" target="blank"><img src="./assets/img/tiktok.svg" alt="tiktok"></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
          </center>

          <div class="footer">
            <p class="txt-footer">Vixiloc @2022 design by <a class="vixiloc" href="https://vixiloc.my.id">Vixiloc Team</a></p>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

  </body>
</html>