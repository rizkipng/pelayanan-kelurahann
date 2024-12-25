<!DOCTYPE html>
    <?php
include 'db.php';
session_start();
$user_id = $_SESSION['user_id'];


if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
   $update_Kota = mysqli_real_escape_string($conn, $_POST['Kota']);
   $update_Negara = mysqli_real_escape_string($conn, $_POST['ngr']);

   mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email', alamat = '$update_alamat', Kota = '$update_Kota', ngr = '$update_Negara' WHERE id = '$user_id'");

   $old_password = $_POST['old_password'];
   $update_password = mysqli_real_escape_string($conn, ($_POST['update_password']));
   $new_password = mysqli_real_escape_string($conn, ($_POST['new_password']));
   $confirm_password = mysqli_real_escape_string($conn, ($_POST['confirm_password']));

   if(!empty($update_password) || !empty($new_password) || !empty($confirm_password)){
      if($update_password != $old_password){
         $message[] = 'Kata Sandi Lama Tidak Sama!';
      }elseif($new_password != $confirm_password){
         $message[] = 'Konfirmasi Kata Sandi Tidak sama!';
      }else{
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_password' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'Kata Sandi Telah diperbarui!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'");
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
                              header('location: index.php');
   
            $message[] = 'Selamat,Foto telah diperbaharui!';

         }
      }
   }

}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/multilevel.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
</head>

<body id="page-top">
                                     <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
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
</div></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../informasi.html">iNFORMASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact-us.html">hubungi kami</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown no-arrow"><a class="text-dark nav-link" aria-expanded="false" data-toggle="dropdown" href="#">
    
                                <img class="border rounded-circle" width="40px" height="40px"        
 <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
     
      ?>
         
                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in">
                                <a class="dropdown-item" href="../TA/profile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                <a class="dropdown-item" href="../TA/login.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                        </svg>Login</a><a class="dropdown-item" href="../TA/registration.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-login fa-sm fa-fw mr-2 text-gray-400">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                                        <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                                    </svg>Register</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" >
         <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
          
                    <h3 class="text-dark mb-4">Profile</h3>
                    
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">         
                                <div class="card-body text-center shadow">
        
                                    <img class="rounded-circle mb-3 mt-4" width='160' height=160'  
            <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/' .$fetch['image'].'">';
         }
       
      ?>
                                    <div class="mb-3">
                                        
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">                                                            
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Ubah Pengguna</p>
                                        </div>
                                        <div class="card-body">
          
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="username">
                                                                <strong>Nama Pengguna</strong><br></label>
                                                            <input class="form-control" type="text" id="username" placeholder="user.name" name="update_name" value="<?php echo $fetch['name'];?>" ></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Alamat e-mail</strong><br></label>
                                                            <input class="form-control" type="email" id="email" placeholder="user@example.com" name="update_email" value="<?php echo $fetch['email']; ?>"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>Password Baru</strong><br></label>
                                                            <input class="form-control" type="text"  placeholder="Password" name="new_password"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="last_name"><strong> Konfirmasi Password Baru</strong></label>
                                                            <input class="form-control" type="text" placeholder="Confirm_Password" name="confirm_password"></div>
                                                    </div>
                                                </div>
                                                 <div class="form-row">
                                                        <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Kota</strong><br></label>
                                                           
                                                            <input class="form-control" type="text"  name="Kota" placeholder="Depok" name="city"></div>
                                                               </div>
                                                <div class="form-group"><label for="address"><strong>Alamat</strong><br></label>
                                                    <input class="form-control" type="text" id="address" name="alamat" placeholder="dimana mana" name="address"></div>                                                    
                                                </div>
                                                
                                                            <div class="form-row">                                                      
                                                            <div class="form-group"><label for="city"><strong>Password Lama</strong><br></label>
                                                            <input class="form-control" type="text"  name="update_password" placeholder="Depok" name="city"></div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Negara</strong><br></label>
                                                            <input class="form-control" type="text" name="ngr"  placeholder="Indonesia" name="country"></div>
                                                    </div>
                                                                 <div class="col">
                                                        <div class="form-group"><label for="country"><strong>Foto Profil</strong><br></label>
                                                            <input class="form-control" type="file" name="update_image" accept="image/jpg, image/jpeg, image/png"  placeholder="Indonesia" name="country"></div>
                                                    </div>
                                                                            <input type="hidden" name="old_password" value="<?php echo $fetch['password']; ?>">
                                                            </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-sm"
                                                            type="submit" name="update_profile" style="margin: 10px;">Simpan</button>
                                                    <button class="btn btn-primary btn-sm" type="submit">Edit</button></div>
                                            </form>         
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
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