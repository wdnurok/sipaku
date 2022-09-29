<!doctype html>

<?php
include_once 'config.php';
?>
<html>
<?php include 'header.html';

?>
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
<link rel="stylesheet" type="text/css" href="../style.css">
 <body>
    <!-- Jumbutron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hallo Bestie,<br>Yuk Konsultasikan Masalah <br> Kulit Wajah Anda Segera</h1>
     <div class="button">
    <a href="periksa.php" class="btn btn-danger" role="button" aria-pressed="true">Konsultasi Disini</a>
  </div>
  </div>
</div>
<!-- Akhir Jumbotron -->


<!-- card-about -->
<div class="agileabout" id="agileabout">
    <div class="container ">
      <h1 style="">Apakah Anda Ingin Tahu Lebih Banyak Tentang Kami?</h1>
        <div class="col-md-6">
          <div data-aos="fade-right">
           <p style="">Website Sistem Pakar Kulit dengan Metode Naive Bayes ini bertujuan untuk membantu sebagian orang dalam 
           melakukan penentuan jenis kulit dan cara perawatan kulit wajah dengan 
           tepat.
           </p></br>

            <p style="">Memudahkan pengguna dalam melakukan pemeriksaan awal 
            mengidentifikasi kulit wajah melalui web sistem pakar dan dapat 
            mengetahui Tindakan yang seharusnya dilakukan</p></br>

           <p style="">Memberikan informasi kepada pengguna tentang mengidentifikasi kulit 
          wajah dan metode penanganannya.</p>

        </div>
        </div>
        <div class="col-md-6">
          <div data-aos="fade-left"
             data-aos-anchor="#example-anchor"
             data-aos-offset="500"
             data-aos-duration="500">
            <img src="assets/image/skin2.jpg"/>
          </div>
        </div>
        <hr class="style14"></hr>
    </div>
  </div>

<!-- akhir about us -->

<!-- card-service -->
<div class="cardser">
 <div class="container">    
    <div class="col-12 col-md-10 offset-md-1 text-center mb-2">
        <h3 style=""> Yang Kami Lakukan Untuk Anda?</h3>
    </div>
    <div data-aos="zoom-in-down">
       <div class="card-group">
        
          <div class="card-0">
            <img class="card-img-top" src="assets/image/1.jpg" alt="Card image cap">
            <div class="card-body">
            <P class="card-title text-center">Mudah Berkonsultasi</P>
          </div>
        </div>
</div>

        <div class="card-1">
            <img class="card-img-top" src="assets/image/2.jpg" alt="Card image cap">
            <div class="card-body"> 
            <P class="card-title text-center">Keakuratan di Hitung System</P>
            </div>
        </div>
        <div class="card-2">
          <img class="card-img-top" src="assets/image/3.jpg" alt="Card image cap">
          <div class="card-body">
          <P class="card-title text-center">User Friendly</P>
        </div>
    </div>
    </div>
  </div>
  </div>
 </div>
</div>
<hr class="style14"></hr>


<!-- Contact -->
  
<div class="kontak" id="kontak" >
  <div class="container">

      <h3 style="">Contact Us</h3>     
        <div data-aos="flip-right">
        <a href="https://www.google.com/maps/place/PT.+TELKOM+AKSES/@-6.3105592,107.2939805,15z/data=!4m5!3m4!1s0x0:0xe1bf1dda28764522!8m2!3d-6.3105592!4d107.2939805">
          <img src="assets/image/map.png" class="img-fluid" alt="Responsive image" style="
        " /></a>
        </div>
        <div class="icon" style="">
          <div data-aos="zoom-in">
        <table><tr>
        <td><a href="tel:+62895349083785"><img src="assets/image/telp.png" class="img-fluid"></td></a>
        <td><a href="https://www.google.co.id/maps/place/Universitas+Buana+Perjuangan+Karawang/@-6.3236102,107.2991223,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69762d4c316603:0x50a8005dfd52a897!8m2!3d-6.3236155!4d107.301311s"><img src="assets/image/lok.png" class="img-fluid"></td>
        <td><a href="mailto: widinuroktv@gmail.com"><img src="assets/image/mail.png" class="img-fluid"></td>
        </tr></table>
        </div>
        </div>
        <hr class="style14">
      
     </div>
    </div>

  <!-- //Contact -->

<!-- akhir jumbotron -->
<?php include 'footer.html'; ?>