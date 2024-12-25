<!DOCTYPE html>
<?php
include 'db.php';
error_reporting(0);
 
session_start();
 
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $tempatlahir = mysqli_real_escape_string($conn,$_POST['tempatlahir']);
    $tanggallahir = mysqli_real_escape_string($conn,$_POST['tanggallahir']);
    $alamat = mysqli_real_escape_string($conn,$_POST['alamat']);
    $agama = mysqli_real_escape_string($conn,$_POST['agama']);
    $SK = mysqli_real_escape_string($conn,$_POST['SK']);
    $pekerjaan = mysqli_real_escape_string($conn,$_POST['pekerjaan']);
    $wn = mysqli_real_escape_string($conn,$_POST['wn']);
    
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   
    $select = mysqli_query($conn, "SELECT * FROM `user_ektp` WHERE name = '$name'");

   if(mysqli_num_rows($select) > 0){
      $message[] = 'image size to large'; 
   }else{
      if($name != $name){
         $message[] = 'user already exist!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      
      }else{
         $insert = mysqli_query
      ($conn, "INSERT INTO `user_ektp`(`name`, `tempatlahir`, `tanggallahir`, `alamat`, `Agama`, `SK`, `pekerjaan`, `wn`, `image`) VALUES ('$name','$tempatlahir','$tanggallahir','$alamat','$Agama','$SK','$pekerjaan','$wn','$image')");

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location: login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-KTP- Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/multilevel.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="../index.php"><img src="assets/img/avatars/Depok.png" width="50">Kelurahan Jati-jajar</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav d-xl-flex ml-auto align-items-xl-center">
                    <li class="nav-item"><a class="nav-link" href="../TA/index.php">home</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown multilevel" style="font-size: .8rem;text-transform: uppercase;padding-left: .5rem;padding-left: 0;text-decoration: underline;padding: .5rem 1rem;text-decoration: none;background-color: transparent;display: flex;-ms-flex-direction: column;flex-direction: column;padding-left: 0;margin-bottom: 0;list-style: none;"><a class="dropdown-toggle text-dark" aria-expanded="false" data-toggle="dropdown">LAYANAN</a>
                            <div class="dropdown-menu dropdown-menu right"><div class="dropright"><a class="btn dropdown-toggle dropdown-item" aria-expanded="false" data-toggle="dropdown" role="button">Pelayanam perizinan</a>
    <div class="dropdown-menu"><a class="dropdown-item" href="../IMB.html">Izin mendirikan bangunan</a>
       
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
                    <li class="nav-item">
                        <div class="nav-item dropdown no-arrow"><a class="text-dark nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><img class="border rounded-circle" src="assets/img/avatars/jatijajar_2.jpg" style="width: 40px;height: 40px;"></a>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="../login.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>Login</a><a class="dropdown-item" href="../registration.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
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
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p></p>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                                  <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
                    <div class="form-group"><label for="name">Nama Lengkap</label>
                        <input class="form-control" name="name" type="text"></div>
                    <div class="form-group"><label for="name">Tempat Lahir</label>
                        <input class="form-control" name="tempatlahir" type="text"></div>
                    <div class="form-group"><label for="name">Tanggal Lahir</label>
                        <input class="form-control" name="tanggallahir" type="date"></div>
                    <div class="form-group"><label for="name">Alamat</label>
                        <input class="form-control" name="alamat" type="text"></div>
                    <div class="form-group"><label for="name">Agama</label>
                        <input class="form-control" name="Agama" type="text"></div>
                    <div class="form-group"><label for="name">Status Perkawinan</label>
                        <input class="form-control" name="SK" type="text"></div>
                    <div class="form-group"><label for="name">Pekerjaan</label>
                        <input class="form-control" name="pekerjaan" type="text"></div>
                    <div class="form-group"><label for="name">Kewarganegaraan</label>
                        <input class="form-control" name="wn" type="text"></div>
                    <div class="form-group"><label for="name">Foto&nbsp;
                            <input class="form-control-file" name="image" type="file" accept="image/jpg,image/png,image/jpeg">
                        </label></div>
                            <button class="btn btn-primary btn-block" name="submit" type="submit">submit</button>
                    Sudah Melakukan registrasi?<a href="id_card.php" class="btn btn-default">Cetak</a>

                </form>
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