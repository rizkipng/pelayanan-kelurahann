<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/multilevel.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Card-1.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">

</head>

<body>
     <?php 
                include "db.php";
                $select = mysqli_query($conn, 'select * from user_ektp ');
                while($fetch = mysqli_fetch_array($select)){
            ?>
    <div class="card">

    <div class="card shadow mb-3 " style="background: url(&quot;assets/img/avatars/KTP%202.jpg&quot;) top / auto;width: 460px;">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold">Kartu Tanda Penduduk</p>
        </div>
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table font-weight-bold" >
                    <tbody>
                        <tr style="height: 18px;" >
                            <td style="height: 24px;">Nama</td>
                            <td><?php echo $fetch['name']; ?></td>
                        </tr>
                        <tr>
                            <td style="height: 24px;">Tanggal Lahir</td>
                            <td><?php echo date('d-m-y', strtotime($fetch['tanggallahir'])); ?></td>
                        </tr>
                        <tr>
                            <td style="height: 24px;">Tempat Lahir</td>
                            <td><?php echo $fetch['tempatlahir']; ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><?php echo $fetch['Agama']; ?></td>
                        </tr>
                        <tr>
                            <td style="width: 225px;">Status Perkawinan</td>
                            <td><?php echo $fetch['SK']; ?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td><?php echo $fetch['wn']; ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td><?php echo $fetch['pekerjaan']; ?></td>
                        </tr>
                        <tr>
                            <td><img style="width: 102px;"<?php    if($fetch['image'] == ''){
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php } ?>
    </div>
         </div>
 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/multilevel-dropdown.js"></script>
</body>
<script>
		window.print();
	</script>