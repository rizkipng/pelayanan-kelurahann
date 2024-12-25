<!DOCTYPE html>

<?php

include 'db.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profil Card</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/multilevel.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="../index.php"><img src="assets/img/avatars/Depok.png" width="50">Kelurahan Jati-jajar</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav d-xl-flex ml-auto align-items-xl-center">
                    <li class="nav-item"><a class="nav-link" href="../index.html">home</a></li>
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

</div>
                            </div>
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
                                    </svg>Login</a>
                                <a class="dropdown-item" href="../registration.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>Register</a>
                                <a class="dropdown-item" href="../TA/profilcard.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>profil card</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="profile-card" >
     
        <div class="profile-back">
    
        </div>
       
        <img class="rounded-circle  profile-pic"           <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'");
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<  img wi src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
        <h3 class="profile-name" style="background: var(--blue);"><?php echo $fetch['name']; ?></h3>
        <p class="profile-bio"></p>
        <ul class="social-list">
            <li> <a class="btn btn-primary" role="button" href="../TA/update_profile.php">Edit Profile</a></li>
            <li> </li>
        </ul>
    </div>
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