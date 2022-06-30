<!DOCTYPE html>
<html>

<head>
  <title>PT SISTEM KESEHATAN INDONESIA</title>
  <!--Meta tags.-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--CDN Bootstrap CSS.-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!--Source file.-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
    body {
      background: white;
    }

    .carouselIndicators {
      width: 100%;
      height: 500px;
    }

    .carousel-inner .carousel-item {
      width: 100%;
      height: 500px;
    }

    .carousel-caption {
      position: absolute;
      text-align: left;
      width: 40%;
      font-size: 20px;
    }

    .layanan {
      border: 0;
    }

    .card-title {
      text-align: center;
    }

    .product {
      border-color: #5AC4CF;
    }
  </style>

</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="http://localhost/Project1/assets/images/Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      PT SISTEM KESEHATAN INDONESIA
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="nav navbar collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #5AC4CF">Profile</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #5AC4CF">
            Layanan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">IT Outsourcing</a>
            <a class="dropdown-item" href="#">Networking Computer</a>
            <a class="dropdown-item" href="#">Virtualization System</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #5AC4CF">
            Product
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">E-KLINIK</a>
            <a class="dropdown-item" href="#">E-KLINIK SKIN</a>
            <a class="dropdown-item" href="#">E-HMS</a>
            <a class="dropdown-item" href="#">E-ABSENSI</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #5AC4CF">Partnership</a>
        </li>
      </ul>
    </div>
  </nav>


  <!--Second Navigation bar-->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #5AC4CF; padding: 1px;">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item" style="padding-right: 30px; color: #FFFFFF;">
        &#9673 admin@abiyosoft.com &nbsp;&nbsp;&nbsp; &#9673 0811-8111-123
      </li>
    </ul>
  </nav>

  <!--Carousel Home Screen-->
  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselIndicators" data-slide-to="1"></li>
      <li data-target="#carouselIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid" src="http://localhost/Project1/assets/images/img1.png" alt="First slide">
        <div class="carousel-caption">
          <h2>Profile</h2>
          <p>ABIYOSOFT adalah perusahaan yang bergerak dalam bidang software development yang berdiri dari tahun 1998, fokus bisnis abiyosoft adalah software aplikasi SIMRS, dari 1998 sampai saat ini (2018) masih konsisten melayani client dibidang kesehatan khususnya rumah sakit di indonesia</p>
          <button type="button" class="btn" style="background-color: #5AC4CF;">Lihat Selengkapnya</button>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="http://localhost/Project1/assets/images/img2.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid" src="http://localhost/Project1/assets/images/img3.png" alt="Third slide">
      </div>
    </div>
  </div>

  <!--Carousel Card Layanan-->
  <div class="container">
    <div class="row">
      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="ITOutsourcingExpert" src="http://localhost/Project1/assets/layanan/ITOutsourcingExpert.png">
                  <div class="card-body">
                    <h4 class="card-title">IT Outsourcing Expert</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="NetworkingComputer" src="http://localhost/Project1/assets/layanan/NetworkingComputer.png">
                  <div class="card-body">
                    <h4 class="card-title">Networking Computer</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="VirtualizationSystem" src="http://localhost/Project1/assets/layanan/VirtualizationSystem.png">
                  <div class="card-body">
                    <h4 class="card-title">Virtualization System</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="ItConsultantExpert" src="http://localhost/Project1/assets/layanan/ItConsultantExpert.png">
                  <div class="card-body">
                    <h4 class="card-title">It Consultant Expert</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="HospitalSoftware" src="http://localhost/Project1/assets/layanan/HospitalSoftware.png">
                  <div class="card-body">
                    <h4 class="card-title">Hospital Software</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card layanan">
                  <img class="img-fluid" alt="SoftwareDevelopment" src="http://localhost/Project1/assets/layanan/SoftwareDevelopment.png">
                  <div class="card-body">
                    <h4 class="card-title">Software Development</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!--Card Product-->
  <div class="card-deck" style="margin-left: 10%; margin-right: 10%;">
    <div class="card product">
      <div class="card-body text-center">
        <h4 class="card-title">E-KLINIK</h4>
        <p class="card-text" style="text-align: left; ">
          &#10004 Pendaftaran Pasien</br></br>
          &#10004 Reservasi Via Android</br></br>
          &#10004 Electronic Medical</br></br>
          &#10004 Record</br></br>
          &#10004 Rawat Jalan</br></br>
          &#10004 Laboratorium</br></br>
          &#10004 MCU</br></br>
          &#10004 Farmasi Jualan</br></br>
        </p>
      </div>
    </div>
    <div class="card product">
      <div class="card-body text-center">
        <h4 class="card-title">E-KLINIK SKIN</h4>
        <p class="card-text" style="text-align: left; ">
          &#10004 Pendaftaran Pasien</br></br>
          &#10004 Reservasi Via Android</br></br>
          &#10004 Electronic Medical</br></br>
          &#10004 Record</br></br>
          &#10004 Rawat Jalan</br></br>
          &#10004 Laboratorium</br></br>
          &#10004 MCU</br></br>
          &#10004 Farmasi Jualan</br></br>
        </p>
      </div>
    </div>
    <div class="card product">
      <div class="card-body text-center">
        <h4 class="card-title">E-HMS</h4>
        <p class="card-text" style="text-align: left; ">
          &#10004 Pendaftaran Pasien</br></br>
          &#10004 Reservasi Via Android</br></br>
          &#10004 Electronic Medical</br></br>
          &#10004 Record</br></br>
          &#10004 Rawat Jalan</br></br>
          &#10004 Laboratorium</br></br>
          &#10004 MCU</br></br>
          &#10004 Farmasi Jualan</br></br>
        </p>
      </div>
    </div>
    <div class="card product">
      <div class="card-body text-center">
        <h4 class="card-title">E-HRD</h4>
        <p class="card-text" style="text-align: left; ">
          &#10004 Absensi Karyawan</br></br>
        </p>
      </div>
    </div>
  </div>

  </br></br></br>
  <!--Mengapa Memilih Kami-->
  <h3 style="text-align: center; color: #5AC4CF;">Mengapa Memilih Kami?</h3>
  <div class="card-group" style="margin-left: 10%; margin-right: 10%;">
    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/simpledesign.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Simple Design</h4>
          <p class="card-text">Design yang simple dengan bahasa yang mudah dipahami dan user friendly</p>
        </div>
      </div>
    </div>

    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/multitarif.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Multi Tarif</h4>
          <p class="card-text">Dioperasikan secara on-line dan terintegrated di setiap departemen </p>
        </div>
      </div>
    </div>

    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/multiadministratif.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Multi Administrasi</h4>
          <p class="card-text">Administrasi dapat disetting berdasarkan penjamin disesuaikan dengan kontrak antara penjamin dan rumah sakit</p>
        </div>
      </div>
    </div>
  </div>


  <div class="collapse card-group" id="collapseExample" style="margin-left: 10%; margin-right: 10%;">
    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/ReportStandarDepkesYANMED.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Report Standar Depkes / YANMED</h4>
          <p class="card-text">Report dapat disajikan secara cepat dan dapat diakses oleh user, sehingga memudahkan pelaporan ke Depkes dan Pemda</p>
        </div>
      </div>
    </div>

    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/SecurityLevel.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Security Level</h4>
          <p class="card-text">Sistem ini dapat mendeteksi pasien yang akan melakukan registrasi, tetapi masih mempunyai hutang pada transaksi sebelumnya, sehingga dapat dilakukan proses pelunasan terlebih dahulu</p>
        </div>
      </div>
    </div>

    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/MultiUsers.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Multi Users</h4>
          <p class="card-text">Dioperasikan secara on-line dan terintegrated di setiap departemen</p>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse card-group" id="collapseExample" style="margin-left: 37%; margin-right: 37%;">
    <div class="card" style="border: 0;">
      <div class="card-horizontal" style="display: flex;">
        <div class="img-square-wrapper">
          <img class="" src="http://localhost/Project1/assets/mengapamemilihsaya/Efisiensi.png" alt="Card image cap" style="width: 100px;">
        </div>
        <div class="card-body">
          <h4 class="card-title" style="text-align: left;">Efisiensi</h4>
          <p class="card-text">Tidak hanya effisiensi waktu tetapi dari sisi SDM dan cost operasional pun dapat ditekan secara proposional</p>
        </div>
      </div>
    </div>
  </div>

  </br>
  <div class="d-flex justify-content-center">
    <button type="button" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn" style="background-color: #5AC4CF;">Lihat Selengkapnya</button>
  </div>

  </br></br></br>

  <!--Client-->
  <h3 style="text-align: center; color: #5AC4CF;">Client</h3>
  <div class="container">
    <div class="row">
      <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/CayaHealthcare.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/FLORACLINIC.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSUPutriBidadari.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/kedatonmedicalcenter.png" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSAliSibroh.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/GreatGiantPineappleClinic.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>

              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RumahSehatCikeas.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/rshandayani.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/Rsasrimedika.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/KlinikEstetika.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/rumahsakitbidadari.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSBHAKTIRAHAYUTABANAN.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row">
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSAULIA.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/KLINIKRAHAYUUU.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSKARTINIkeabyoran.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSBinaSehat.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSIAANDINI.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/kliniksehatcikampek.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>

              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/BIOMEDICENTRE.jpg" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSUDPambalahBatung.png" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSURahmanRahim.png" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSUINDRIATISOLOBARU.png" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RSSentralMedikakrw&cikarang,seragg.png" alt="Card image cap">
                  </div>
                </div>
              </div>
              <div class="col-md-2 mb-5">
                <div class="card mx-auto mb-2" style="border: 0;">
                  <div class="d-flex align-items-center" style="height:150px;">
                    <img class="card-img-top" src="http://localhost/Project1/assets/client/RumahSakit harapanBunda.png" alt="Card image cap">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="carousel-item">
          <div class="row">
            <div class="col-md-2 mb-5">
              <div class="card mx-auto mb-2" style="border: 0;">
                <div class="d-flex align-items-center" style="height:150px;">
                  <img class="card-img-top" src="http://localhost/Project1/assets/client/RSAULIA.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-5">
              <div class="card mx-auto mb-2" style="border: 0;">
                <div class="d-flex align-items-center" style="height:150px;">
                  <img class="card-img-top" src="http://localhost/Project1/assets/client/KLINIKRAHAYUUU.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-5">
              <div class="card mx-auto mb-2" style="border: 0;">
                <div class="d-flex align-items-center" style="height:150px;">
                  <img class="card-img-top" src="http://localhost/Project1/assets/client/RSKARTINIkeabyoran.jpg" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <!--Footer-->
  <section class="" style="background-color: #5AC4CF; padding: 10px;">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">PT SISTEM KESEHATAN INDONESIA</h6>
          <p>ABIYOSOFT adalah perusahaan yang bergerak dalam bidang software development yang berdiri dari tahun 1998, fokus bisnis abiyosoft adalah software aplikasi SIMRS, dari 1998 sampai saat ini (2018) masih konsisten melayani client dibidang kesehatan khususnya rumah sakit di indonesia</p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Product</h6>
          <p><a href="#!" class="text-reset">E-KLINIK</a></p>
          <p><a href="#!" class="text-reset">E-KLINIK-SKIN</a></p>
          <p><a href="#!" class="text-reset">E-HMS</a></p>
          <p><a href="#!" class="text-reset">E-HRD</a></p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Jl.Raya Magelang No 188 Karang Waru, Daerah Istimewa Yogyakarta</p>
          <p><i class="fas fa-envelope me-3"></i> admin@abiyosoft.com</p>
          <p><i class="fas fa-phone me-3"></i> 0811-8111-123</p>
        </div>
      </div>
    </div>
  </section>
  </footer>

</body>

</html>