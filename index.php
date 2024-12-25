<!DOCTYPE html>
<?php 
 
session_start();
 

 
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/multilevel.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav  class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="../index.php"><img src="assets/img/avatars/Depok.png" width="50">Kelurahan Jati-jajar</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav d-xl-flex ml-auto align-items-xl-center">
                    <li class="nav-item"><a class="nav-link" href="../TA/index.php">home</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown multilevel" style="font-size: .8rem;text-transform: uppercase;padding-left: .5rem;padding-left: 0;text-decoration: underline;padding: .5rem 1rem;text-decoration: none;background-color: transparent;display: flex;-ms-flex-direction: column;flex-direction: column;padding-left: 0;margin-bottom: 0;list-style: none;"><a class="dropdown-toggle text-dark" aria-expanded="false" data-toggle="dropdown">LAYANAN</a>
                            <div class="dropdown-menu dropdown-menu right"><div class="dropright"><a class="btn dropdown-toggle dropdown-item" aria-expanded="false" data-toggle="dropdown" role="button">Pelayanam perizinan</a>
                             <div class="dropdown-menu"><a class="dropdown-item" href="http://localhost:8080/IMB.php">Izin mendirikan bangunan</a>
       
    </div>
</div><div class="dropright"><a class="btn dropdown-toggle dropdown-item" aria-expanded="false" data-toggle="dropdown" role="button">Pelayanan adminitrasi kependudukan </a>
    <div class="dropdown-menu"><a class="dropdown-item" href="../KTP.html">Pembuatan KTP Baru
        </a><a class="dropdown-item" href="../KK.html
            ">Pembuatan Kartu Keluarga</a>
        <a class="dropdown-item" href="../E-KTP.html
                                       ">Pembuatan E-KTP
        </a>
       
    </div>
</div><div class="dropright"><a class="btn dropdown-toggle dropdown-item" aria-expanded="false" data-toggle="dropdown" role="button">Pelayanan umum
    </a>
    <div class="dropdown-menu"><a class="dropdown-item" href="../Suratkematian.html">Pembuatan Surat Kematian</a><a class="dropdown-item" href="../Lahir.html">Surat keterangan lahir</a>
       
    </div>
</div></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../informasi.html">iNFORMASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact-us.html">hubungi kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="ADMIN/dashboard-1.html">dATA PENDUDUK</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown no-arrow"><a class="text-dark nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle" src="assets/img/avatars/jatijajar_2.jpg" style="width: 40px;height: 40px;"></a>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profilcard.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="../login.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                        </svg>Login</a><a class="dropdown-item" href="../TA/registration.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>Register</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="text-black-50 clean-block clean-hero" style="background-image:url(&quot;assets/img/avatars/Ilustrasi-Pelayanan-Publik.jpg&quot;);color:rgba(9, 162, 255, 0.85);"></section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Info</h2>
                    <p>&nbsp; Jatijajar adalah kelurahan yang berada di Kecamatan Tapos, Kota Depok, Provinsi Jawa Barat, Indonesia.<br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/avatars/wp.jpg"></div>
                    <div class="col-md-6">
                        <h3>Sejarah Singkat Tentang Desa Jati-Jajar</h3>
                        <div class="getting-started-info">
                            <p>Secara Adminitrasi wilayah jati-jajar termasuk wilayah kecamatan tapos, salah satu tempat populer dan tempat bersejarah didaerah jati-jajar adalah situ jati-jajar.&nbsp;<br>Sejarah yang terkait mengenai Situs Situ atau Setu Jati Jajar adalah didapatkan di blog pahlawankalisunter, Bahwa Raden Panji Wanayasa, putra Bagus Wanabaya, cucu Pembayun yang dimakamkan di Kebayunan Tapos, Depok sempat berjuang melawan VOC Belanda di tahun 1629.&nbsp;<br>Raden Panji Wanayasa&nbsp;menjadi ulama di Jatijajar, anaknya Raden Santri Bethot, menjadi panglima pasukan sandi kerajaan Banten, gugur di terbaring disisi situ atau setu Jatijajar. Terdapat cerita konon kuda dan keretanya masih sering terlihat berjalan dikeliling Situ atau Setu Jatijajar.&nbsp;<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Informasi Data Penduduk</h2>
                    <p></p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>JUMLAH PENDUDUK</span></div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span><label>4000</label></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Usia Penduduk</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;0-10 Tahun&quot;,&quot;11-20 Tahun&quot;,&quot;21-30 Tahun&quot;,&quot;31-40 Tahun&quot;,&quot;41 Tahun+++&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;,&quot;#e74a3b&quot;,&quot;#f6c23e&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;800&quot;,&quot;1500&quot;,&quot;700&quot;,&quot;500&quot;,&quot;500&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{&quot;display&quot;:false}}}"></canvas></div>
                                <div class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;0-10 Tahun</span><span class="mr-2"><i class="fas fa-circle text-success"></i>11-20 Tahun</span><span class="mr-2"><i class="fas fa-circle text-info"></i>&nbsp;21-30 Tahun</span><span class="mr-2"><i class="fas fa-circle text-danger"></i>&nbsp;31-40 Tahun</span><span class="mr-2"><i class="fas fa-circle text-warning"></i>&nbsp;41 Tahun++</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Ruang Publik Desa Jati-jajar</h2>
                    <p>Foto dibawah ini adalah Ruang Publik yang dimiliki oleh Desa Jati-jajar yaitu Taman Jati-jajar dan situ Jati Jajar</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/avatars/jatijajar_2.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/avatars/Situ-Jatijajar.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/avatars/spot-foto.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block about-us">
            <div class="container">
                <section class="map-clean">
                    <div class="container">
                        <div class="intro">
                            <h2 class="text-center">Location </h2>
                            <p class="text-center"></p>
                        </div>
                    </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCUwjbyfeShpayhe2ViaU4zQ1bye0A4Zus&amp;q=Kantor+Kelurahan+Jatijajar%2C+HVJ8%2BQ6M%2C+Jl.+Kelurahan+Jatijajar%2C+Jatijajar%2C+Kec.+Tapos%2C+Kota+Depok%2C+Jawa+Barat+16455&amp;zoom=15" width="100%" height="450"></iframe>
                </section>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"></div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Social Media</h5>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2023 Copyright Text</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/multilevel-dropdown.js"></script>
</body>

</html>