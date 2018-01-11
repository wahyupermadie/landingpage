<!doctype html>
<html lang="en">

<head>
    <title>Futnet - Futsal Network</title>
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('style/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!-- Main css -->
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="https://futnet.id"><img src="{{asset('style/images/logo.png')}}" class="img-fluid" alt="logoFutnet"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">Beranda <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#perkenalan">Perkenalan</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">Fitur</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#mobileapp">Mobile App</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#webapp">Web App</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#team">Tim</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">Kontak</a> </li>
                                <li class="nav-item"> <a data-toggle="modal" data-target="#exampleModal" href="#exampleModal" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Register</a></li>
                                <li class="nav-item"><a href="https://customer.futnet.id" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Demo</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header ***** -->
    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Futsal Network</h1>
            <p class="tagline">Aplikasi Web dan Android yang membantu Anda untuk melakukan transaksi pemesanan online lapangan Futsal tanpa ribet !</p>
        </div>
        <div class="img-holder mt-3"><img src="{{asset('style/images/awal.png')}}" alt="phoneMobileApp" class="img-fluid"></div>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Video Area Start ***** -->
    <div class="section light-bg" id="perkenalan">
        <div class="container">
            <div class="section-title">
                <small>PERKENALAN</small>
                <h3>Apa itu <img src="{{asset('style/images/logo2.png')}}" class="img-fluid" alt="logoFutnetHijau"></h3>
            </div>
                <center>
                    <iframe class="video-area" src="https://www.youtube.com/embed/NRs7f9GR45Q" frameborder="0" allowfullscreen ng-show="showvideo"></iframe>
                </center>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Fitur ***** -->
    <div class="section light-bg" id="features">
        <div class="container">
            <div class="section-title">
                <small>HIGHLIGHTS</small>
                <h3>Fitur Unggulan</h3>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simpel</h4>
                                    <p class="card-text">Design aplikasi Futnet yang simpel dan mudah digunakan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Terintegrasi</h4>
                                    <p class="card-text">Aplikasi Futnet sudah terintegrasi antara Aplikasi Web dan Mobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Aman</h4>
                                    <p class="card-text">Aplikasi Futnet aman digunakan saat melakukan pemesanan online.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Fitur End ***** -->

    <!-- ***** Mobile App ***** -->
    <div class="section" id="mobileapp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <h2>Jadi Bagian Beta Tester !</h2>
                    <p class="mb-4">Ayo download dan coba aplikasi Mobile Futnet untuk memesan lapangan Futsal online masa kini.</p>
                    <a href="https://play.google.com/store/apps/details?id=id.futnet.futsalnetwork" target="_blank" class="btn btn-light"><img src="{{asset('style/images/playicon.png')}}" alt="icon"> Google play</a>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="{{asset('style/images/gambar.png')}}" alt="perspective phone" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- ***** Mobile App End ***** -->

    <!-- ***** Fitur Mobile App ***** -->
    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>Fitur Mobile</small>
                <h3>Pesan Lapangan Futsal dengan Aplikasi <img src="images/logo2.png" class="img-fluid" alt="logoFutnetHijau"></h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#jadwal">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#peta">Peta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notifikasi">Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profil">Profil</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="jadwal">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{asset('style/images/jadwal.png')}}" alt="foto jadwal" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Melihat Jadwal Lapangan Futsal</h2>
                            <p>Dengan menggunakan aplikasi Mobile Futnet, Anda bisa melihat jadwal lapangan Futsal yang sudah atau belum di pesan tanpa perlu bertanya kepada penjaga tempat sewa.
                            </p>
                            <p> Selain itu Anda dapat melakukan proses pemesanan lapangan langsung di dalam aplikasi sesuai dengan jadwal yang anda inginkan tanpa perlu menghubungi tempat sewa Futsal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="peta">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Melihat Tempat Futsal dengan Peta</h2>
                            <p>Dengan menggunakan aplikasi Mobile Futnet, Anda tidak perlu bingung mencari tempat Futsal yang akan anda pesan. Aplikasi Mobile Futnet terdapat fitur Peta yang telah didukung dengan Gmaps sehingga saat Anda mencari tempat Futsal yang ingin Anda kunjungi, Anda akan di informasikan rute perjalanan menuju tempat sewa lapangan Futsal.
                            </p>
                        </div>
                        <img src="{{asset('style/images/peta.png')}}" alt="foto peta" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="notifikasi">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{asset('style/images/notif.png')}}" alt="foto notifikasi" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Notifikasi Pemesanan Secara Langsung</h2>
                            <p>Saat Anda telah melakukan pemesanan lapangan Futsal sesuai dengan jadwal yang Anda inginkan, pihak penyewa Futsal akan mengkonfirmasi pemesanan anda dengan aplikasi Web Futnet. Anda akan diberi notifikasi apabila pemesanan diterima dan Anda siap untuk bermain Futsal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profil">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Profil User Pengguna Aplikasi</h2>
                            <p>Aplikasi Mobile Futnet menyediakan fitur Profil User yang berguna sebagai tempat untuk menyimpan data pengguna. Tujuan fitur ini untuk memvalidasi pengguna agar pihak penyewa lapangan Futsal bisa menghubungi pengguna yang telah melakukan pemesanan lapangan Futsal.
                        </div>
                        <img src="{{asset('style/images/profil.png')}}" alt="foto profil" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Fitur Mobile App End ***** -->

    <!-- ***** Web App ***** -->
    <div class="section" id="webapp">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('style/images/web-futnet.png')}}" alt="Web-Futnet" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h2>Kelola Lapangan Futsal Anda dengan Aplikasi Web Futnet !</h2>
                        <p class="mb-4">Bagi Anda pemilik tempat futsal tidak perlu ribet lagi dalam mengelola jadwal lapangan Futsal. Aplikasi Web Futnet siap untuk mengelola lapangan futsal Anda.</p>
                        <a href="#fiturwebapp" class="btn btn-primary">Read more</a></div>
                </div>
            </div>

        </div>

    </div>
    <!-- ***** Web App End ***** -->

    <!-- ***** Fitur Web App ***** -->
    <div class="section light-bg" id="fiturwebapp">
        <div class="img-place-left">
                <div class="img-holder-left mt-3"><img src="{{asset('style/images/right-web.png')}}" alt="Web-Futnet" ></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Kelola Pemesanan</h5>
                                <p>Kelola Pemesanan dengan cara kekinian dan hemat penggunaan kertas. </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Kelola Jadwal</h5>
                                <p>Kelola harga sewa dan jadwal Anda hanya dalam beberapa langkah saja dan pasarkan ke banyak calon pelanggan.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Kelola Lapangan</h5>
                                <p>Lapangan sedang dalam perbaikan? ada pembukaan lapangan baru? kelola lapangan Anda dengan mudah melalui sistem Futnet. </p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">4</div>
                            <div class="media-body">
                                <h5>Laporan Tranksaksi</h5>
                                <p>Dengan Futnet lihat peningkatan bisnis futsal Anda menuju ke arah menggembirakan. Pantau laporan transaksi dari mana saja. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Fitur Web App End ***** -->

    <!-- ***** Dialog Form ***** -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="alert alert-danger" style="display: none">
                      ERROR
                </div>
                <div class="success alert-success" style="display: none">
                      REGISTRASI BERHASIL
                </div>
            <form id="requestForm" method="POST" enctype="multipart/form-data" action="{{route('request.customer')}}" class="col s12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Nama Lengkap</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="full_name" id="full_name"  placeholder="Masukan Nama"/>
                            </div>
                            <span class="text-danger">
                                    <strong id="full_name-error"></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="email" id="email"  placeholder="Masukan Email"/>
                            </div>
                            <span class="text-danger">
                                    <strong id="email-error"></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">No Telepon</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="phone" id="phone"  placeholder="Masukan No Telepon"/>
                            </div>
                            <span class="text-danger">
                                    <strong id="phone-error"></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Nama Futsal</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-futbol-o fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="futsal_name" id="futsal_name"  placeholder="Nama Futsal"/>
                            </div>
                            <span class="text-danger">
                                    <strong id="futsal_name-error"></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm" class="cols-sm-2 control-label">Alamat</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-address-card-o fa" aria-hidden="true"></i></span>
                                <textarea length="120" class="form-control" name="address" id="address"  placeholder="Alamat"></textarea>
                            </div>
                            <span class="text-danger">
                                    <strong id="address-error"></strong>
                            </span>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="button" id="requestButton" class="btn btn-primary btn-lg btn-block login-button">Submit</button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Dialog Form End ***** -->

    <!-- ***** FAQ ***** -->
    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Bolehkah Saya mencoba sebelum membeli?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Apa saja metode pembayaran yang tersedia?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Bolehkah Saya mengganti paket selanjutnya?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Apakah Anda mempunyai kontrak?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                </div>
            </div>
        </div>

    </div>
    <!-- ***** FAQ End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <div class="section" id="team">
        <div class="container">
                    <!-- Heading Text  -->
                    <div class="section-title">
                        <small>TIM</small>
                        <h3>Lebih Dekat Bersama Tim <img src="{{asset('style/images/logo2.png')}}" class="img-fluid" alt="logoFutnetHijau"></h3>
                    </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/ceo-rez.jpg')}}" alt="Adi-candra" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/adicandraofficial" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/wijayaadicandra/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Adi Candra</h4>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/cto-rez.jpg')}}" alt="Urip-Yogantara" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/uripyogantara" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/uripyogantara/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Urip Yogantara</h4>
                            <p>CTO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/programmer-rez.jpg')}}" alt="Wahyu-Permadi" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/wahyu.permadi.9" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/wahyupermadie_/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Wahyu Permadi</h4>
                            <p>Programmer</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/cmo-rez.jpg')}}" alt="Tri-Satya" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/tri.pradnyandari.7" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/trisatya26/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Tri Satya</h4>
                            <p>CMO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/cio-rez.jpg')}}" alt="Dewa Adhitya" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/dewa.adhitya" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/dewadhitya_/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Dewa Adhitya</h4>
                            <p>CIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="single-team-member">
                        <div class="member-image">
                            <img src="{{asset('style/images/team/designer-rez.jpg')}}" alt="Adi-Triginarsa" class="img-fluid">
                            <div class="team-hover-effects">
                                <div class="team-social-icon">
                                    <a href="https://web.facebook.com/triginarsa" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.instagram.com/triginarsa/" target="_blank"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="member-text">
                            <h4>Adi Triginarsa</h4>
                            <p>Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Our Team Area End ***** -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span>Jl. Wage Rudolf Supratman No.302, Kesiman Petilan, Denpasar Timur, Kota Denpasar, Bali 80237</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:support@mobileapp.com">support@futnet.id</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:085738042904">085738042904</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                    <h4 class="title"><b>SUBSCRIBE</b></h4>
                        <div class="input-area">
                            <form method="POST" enctype="multipart/form-data" action="{{url('subscriber')}}">
                                {{ csrf_field() }}
                                <!-- <div class="wrap-input100 validate-input" data-validate = "Please enter email: e@a.x"> -->
                                    <input class="input100" type="text" name="email" placeholder="Email">
                                    <span class="focus-input100"></span>
                                    <button class=" btn btn-primary btn-block" type="submit">Kirim</button>
                                <!-- </div> -->
                            </form>
                        </div>
                        <br>
                        <br>
                        <br>
                        <a href="https://web.facebook.com/futnetid" target="_blank"><span class="ti-facebook"></span></a>
                        <a href="https://www.instagram.com/futnetid/" target="_blank"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
<footer class="my-5 text-center">
    <p class="mb-2"><small>COPYRIGHT © 2018. ALL RIGHTS RESERVED. <a href="https://futnet.id">FUTNET.ID</a></small></p>
</footer>

<!-- jQuery and Bootstrap -->
<script src="{{asset('style/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('style/js/wow.js')}}"></script>
<script src="{{asset('style/js/main.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('style/js/script.js')}}"></script>
<!-- Font Awesome -->
<script src="https://use.fontawesome.com/0b764ab797.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript">
    $('#requestButton').click(function(){
        
        var formData = new FormData($('#requestForm')[0]);
        $( '#full_name-error' ).html( "" );
        $( '#futsal_name-error' ).html( "" );
        $( '#phone-error' ).html( "" );
        $( '#address-error' ).html( "" );
        $( '#email-error' ).html( "" );

        $.ajax({
            url:'http://127.0.0.1:8000/request-customer',
            type:'POST',
            processData: false,
            contentType: false,            
            data:formData,
            success:function(data) {
                console.log(formData);
                if(data.errors) {
                    $('.alert').show();
                    if(data.errors.full_name){
                        $( '#full_name-error' ).html( data.errors.full_name[0] );
                    }
                    if(data.errors.phone){
                        $( '#phone-error' ).html( data.errors.phone[0] );
                    }
                    if(data.errors.futsal_name){
                        $( '#futsal_name-error' ).html( data.errors.futsal_name[0] );
                    }
                    if(data.errors.address){
                        $( '#address-error' ).html( data.errors.address[0] );
                    }
                    if(data.errors.address){
                        $( '#email-error' ).html( data.errors.email[0] );
                    }
                    
                }
                if(data.success) {
                    swal({
                        title: "Selamat !",
                        text: "Anda sudah berhasil mendaftar di Futnet!",
                        type: "success"
                    }, function() {
                       window.location.href = "{{url('/')}}";
                    });
                }
            },
        });
    });
</script>
</body>

</html>
