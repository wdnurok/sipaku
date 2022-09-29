<!DOCTYPE html>
<?php include 'header.html'; ?>


<body>
<section id="tes_asma">
<div class="inner_wrapper">
<div class="container">
<table border="3" align="center" width="850.2" style="border-color:#FF0.20.20.20.2; background-color:white;">
  <tr>
  </tr>
    <tr>
      <td style="color:#0.20.20.20.20.20.2;"> 

<?php 
 $nama = $_POST['nama'];
 $ttl = $_POST['ttl'];
 $alamat = $_POST['alamat'];
 $input1 = $_POST['input1'];
 $input2 = $_POST['input2'];
 $input3 = $_POST['input3'];
 $input4 = $_POST['input4'];
 $input5 = $_POST['input5'];
 $input7 = $_POST['input7'];
 $input6 = $_POST['input6'];
 $input8 = $_POST['input8'];
 $input9 = $_POST['input9'];
 $input10 = $_POST['input10'];   
 $input11 = $_POST['input11']; 
 $input12 = $_POST['input12']; 
 $input13 = $_POST['input13']; 
 $input14 = $_POST['input14']; 

 
  $normal = 1;
 $berminyak = 10/30;
 $sensitif = 4/30;
 $kombinasi = 10/30;
 $kering = 6/30;

 #===========1==============
 $y1n = 0.2;
 $y1b = 10/10;
 $y1s = 0.2;
 $y1k = 10/10;
 $y1kg= 0.2;

 $t1n = 1;
 $t1b = 0.2;
 $t1s = 0.2;
 $t1k = 0.2;
 $t1kg= 0.2;

 #=============2=================
 $y2n = 0.2;
 $y2b = 10/10;
 $y2s = 0.2;
 $y2k = 10/10;
 $y2kg= 0.2;

  $t2n = 1;
 $t2b = 0.2;
 $t2s = 0.2;
 $t2k = 0.2;
 $t2kg= 0.2;
#==============3===================
 $y3n = 0.2;
 $y3b = 10/10;
 $y3s = 0.2;
 $y3k = 8/10;
 $y3kg= 0.2;

  $t3n = 1;
 $t3b = 0.2;
 $t3s = 0.2;
 $t3k = 0.2;
 $t3kg= 0.2;

#===========4================
 $y4n = 0.2;
 $y4b = 8/10;
 $y4s = 0.2;
 $y4k = 8/10;
 $y4kg= 0.2;

  $t4n = 1;
 $t4b = 0.2;
 $t4s = 0.2;
 $t4k = 0.2;
 $t4kg= 0.2;
#============5===============
 $y5n = 0.2;
 $y5b = 0.2;
 $y5s = 0.2;
 $y5k = 0.2;
 $y5kg= 6/6;

 $t5n = 1;
 $t5b = 0.2;
 $t5s = 0.2;
 $t5k = 0.2;
 $t5kg= 0.2;
#===========6================
 $y6n = 0.2;
 $y6b = 10/10;
 $y6s = 0.2;
 $y6k = 10/10;
 $y6kg= 0.2;

 $t6n = 1;
 $t6b = 0.2;
 $t6s = 0.2;
 $t6k = 0.2;
 $t6kg= 0.2;
#===========7================
 $y7n = 0.2;
 $y7b = 0.2;
 $y7s = 0.2;
 $y7k = 0.2;
 $y7kg= 3/4;

 $t7n = 1;
 $t7b = 0.2;
 $t7s = 0.2;
 $t7k = 0.2;
 $t7kg= 0.2;
 #===========8================
 $y8n = 0.2;
 $y8b = 0.2;
 $y8s = 0.2;
 $y8k = 0.2;
 $y8kg= 3/4;

 $t8n = 1;
 $t8b = 0.2;
 $t8s = 0.2;
 $t8k = 0.2;
 $t8kg= 0.2;
 #===========9================
 $y9n = 0.2;
 $y9b = 10/10;
 $y9s = 0.2;
 $y9k = 10/10;
 $y9kg= 0.2;

 $t9n = 1;
 $t9b = 0.2;
 $t9s = 0.2;
 $t9k = 0.2;
 $t9kg= 0.2;
  #===========10================
 $y10n = 0.2;
 $y10b = 0.2;
 $y10s = 0.2;
 $y10k = 9/10;
 $y10kg= 3/4;

 $t10n = 1;
 $t10b = 0.2;
 $t10s = 0.2;
 $t10k = 0.2;
 $t10kg= 0.2;
  #===========11================
 $y11n = 0.2;
 $y11b = 0.2;
 $y11s = 3/4;
 $y11k = 10/10;
 $y11kg= 0.2;

 $t11n = 1;
 $t11b = 0.2;
 $t11s = 0.2;
 $t11k = 0.2;
 $t11kg= 0.2;
  #===========12================
 $y12n = 0.2;
 $y12b = 0.2;
 $y12s = 3/4;
 $y12k = 0.2;
 $y12kg= 0.2;

 $t12n = 1;
 $t12b = 0.2;
 $t12s = 0.2;
 $t12k = 0.2;
 $t12kg= 0.2;
  #===========13================
 $y13n = 0.2;
 $y13b = 0.2;
 $y13s = 3/4;
 $y13k = 0.2;
 $y13kg= 0.2;

 $t13n = 1;
 $t13b = 0.2;
 $t13s = 0.2;
 $t13k = 0.2;
 $t13kg= 0.2;
  #===========14================
 $y14n = 0.2;
 $y14b = 0.2;
 $y14s = 3/4;
 $y14k = 0.2;
 $y14kg= 0.2;

 $t14n = 1;
 $t14b = 0.2;
 $t14s = 0.2;
 $t14k = 0.2;
 $t14kg= 0.2;

#===============================
if ($input1 == 'input1a'){
  $temp1 = $input1;
  $normal1 = $y1n;
  $berminyak1 = $y1b;
  $sensitif1 = $y1s;
  $kombinasi1 = $y1k;
  $kering1 = $y1kg;
}
if ($input1 == 'input1b'){
  $temp1 = $input1;
  $normal1 = $t1n;
  $berminyak1 = $t1b;
  $sensitif1 = $t1s;
  $kombinasi1 = $t1k;
  $kering1 = $t1kg;
}
#===============================
if ($input2 == 'input2a'){ 
  $temp2 = $input2;
  $normal2 = $y2n;
  $berminyak2 = $y2b;
  $sensitif2 = $y2s;
  $kombinasi2 = $y2k;
  $kering2 = $y2kg;
}
if ($input2 == 'input2b'){ 
  $temp2 = $input2;
  $normal2 = $t2n;
  $berminyak2 = $t2b;
  $sensitif2 = $t2s;
  $kombinasi2 = $t2k;
  $kering2 = $t2kg;
}
#===============================
if ($input3 == 'input3a'){
  $temp3 = $input3;
  $normal3 = $y3n;
  $berminyak3 = $y3b;
  $sensitif3 = $y3s;
  $kombinasi3 = $y3k;
  $kering3 = $y3kg;
}
if ($input3 == 'input3b'){
  $temp3 = $input3;
  $normal3 = $t3n;
  $berminyak3 = $t3b;
  $sensitif3 = $t3s;
  $kombinasi3 = $t3k;
  $kering3 = $t3kg;
}

#===============================
if ($input4 == 'input4a'){
  $temp4 = $input4;
  $normal4 = $y4n;
  $berminyak4 = $y4b;
  $sensitif4 = $y4s;
   $kombinasi4 = $y4k;
    $kering4 = $y4kg;
}
if ($input4 == 'input4b'){
  $temp4 = $input4;
  $normal4 = $t4n;
  $berminyak4 = $t4b;
  $sensitif4 = $t4s;
   $kombinasi4 = $t4k;
    $kering4 = $t4kg;
}

#===============================
if ($input5 == 'input5a'){ 
  $temp5 = $input5;
  $normal5 = $y5n;
  $berminyak5 = $y5b;
  $sensitif5 = $y5s;
  $kombinasi5 = $y5k;
  $kering5 = $y5kg;
}
if ($input5 == 'input5b'){ 
  $temp5 = $input5;
  $normal5 = $t5n;
  $berminyak5 = $t5b;
  $sensitif5 = $t5s;
  $kombinasi5 = $t5k;
  $kering5 = $t5kg;
}
#===============================
if ($input7 == 'input7a'){
  $temp7 = $input7;
  $normal7 = $y7n;
  $berminyak7 = $y7b;
  $sensitif7 = $y7s;
  $kombinasi7 = $y7k;
  $kering7 = $y7kg;
}
if ($input7 == 'input7b'){
  $temp7 = $input7;
  $normal7 = $t7n;
  $berminyak7 = $t7b;
  $sensitif7 = $t7s;
  $kombinasi7 = $t7k;
  $kering7 = $t7kg;
}

#===============================
if ($input6 == 'input6a'){
  $temp6 = $input6;
  $normal6 = $y6n;
  $berminyak6 = $y6b;
  $sensitif6 = $y6s;
  $kombinasi6 = $y6k;
  $kering6 = $y6kg;
}
if ($input6 == 'input6b'){
  $temp6 = $input6;
  $normal6 = $t6n;
  $berminyak6 = $t6b;
  $sensitif6 = $t6s;
  $kombinasi6 = $t6k;
  $kering6 = $t6kg;
}
#===============================
if ($input8 == 'input8a'){
  $temp8 = $input8;
  $normal8 = $y8n;
  $berminyak8 = $y8b;
  $sensitif8= $y8s;
  $kombinasi8 = $y8k;
  $kering8 = $y8kg;
}
if ($input8 == 'input8b'){
  $temp8 = $input8;
  $normal8 = $t8n;
  $berminyak8 = $t8b;
  $sensitif8= $t8s;
  $kombinasi8 = $t8k;
  $kering8 = $t8kg;
}
#===============================
if ($input9 == 'input9a'){
  $temp9 = $input9;
  $normal9 = $y9n;
  $berminyak9 = $y9b;
  $sensitif9= $y9s;
  $kombinasi9 = $y9k;
  $kering9 = $y9kg;
}

if ($input9 == 'input9b'){
  $temp9 = $input9;
  $normal9 = $t9n;
  $berminyak9 = $t9b;
  $sensitif9= $t9s;
  $kombinasi9 = $t9k;
  $kering9 = $t9kg;
}
#===============================
if ($input10 == 'input10a'){
  $temp10 = $input10;
  $normal10 = $y10n;
  $berminyak10 = $y10b;
  $sensitif10= $y10s;
  $kombinasi10 = $y10k;
  $kering10 = $y10kg;
}

if ($input10 == 'input10b'){
  $temp10 = $input10;
  $normal10 = $t10n;
  $berminyak10 = $t10b;
  $sensitif10= $t10s;
  $kombinasi10 = $t10k;
  $kering10 = $t10kg;
}
#===============================
if ($input11 == 'input11a'){
  $temp11 = $input11;
  $normal11 = $y11n;
  $berminyak11 = $y11b;
  $sensitif11= $y11s;
  $kombinasi11 = $y11k;
  $kering11 = $y11kg;
}

if ($input11 == 'input11b'){
  $temp11 = $input11;
  $normal11 = $t11n;
  $berminyak11 = $t11b;
  $sensitif11= $t11s;
  $kombinasi11 = $t11k;
  $kering11 = $t11kg;
}
#===============================
if ($input12 == 'input12a'){
  $temp12 = $input12;
  $normal12 = $y12n;
  $berminyak12 = $y12b;
  $sensitif12= $y12s;
  $kombinasi12 = $y12k;
  $kering12 = $y12kg;
}

if ($input12 == 'input12b'){
  $temp12 = $input12;
  $normal12 = $t12n;
  $berminyak12 = $t12b;
  $sensitif12= $t12s;
  $kombinasi12 = $t12k;
  $kering12 = $t12kg;
}
#===============================
if ($input13 == 'input13a'){
  $temp13 = $input13;
  $normal13 = $y13n;
  $berminyak13 = $y13b;
  $sensitif13= $y13s;
  $kombinasi13 = $y13k;
  $kering13 = $y13kg;
}

if ($input13 == 'input13b'){
  $temp13 = $input13;
  $normal13 = $t13n;
  $berminyak13 = $t13b;
  $sensitif13= $t13s;
  $kombinasi13 = $t13k;
  $kering13 = $t13kg;
}
#===============================
if ($input14 == 'input14a'){
  $temp14 = $input14;
  $normal14 = $y14n;
  $berminyak14 = $y14b;
  $sensitif14= $y14s;
  $kombinasi14 = $y14k;
  $kering14 = $y14kg;
}

if ($input14 == 'input14b'){
  $temp14 = $input14;
  $normal14 = $t14n;
  $berminyak14 = $t14b;
  $sensitif14= $t14s;
  $kombinasi14 = $t14k;
  $kering14 = $t14kg;
}
#===============================


// $total_normal = $normal1 * $normal2 * $normal3 * $normal4 * $normal5 * $normal10 * $normal6 * $normal8 * $normal9 * $normal10 * $normal11 * $normal12 * $normal13 * $normal14 * $normal;
$total_berminyak = $berminyak1 * $berminyak3 * $berminyak4 * $berminyak6 * $berminyak11 * $berminyak;
$total_sensitif = $sensitif7 * $sensitif11 * $sensitif12 * $sensitif13 * $sensitif14 *  $sensitif;
$total_kombinasi = $kombinasi2 * $kombinasi6 * $kombinasi10 * $kombinasi9  * $kombinasi11 * $kombinasi;
$total_kering = $kering5  * $kering8 * $kering11 * $kering;


echo "Nama : $nama <br>";
echo "Tempat Tanggal Lahir : $ttl <br>";
echo "Alamat : $alamat <br>";
echo "<br>";
// echo "Hasil Probabilitas Kulit ( P[ Normal ] ) : $total_normal <br>";
echo "Hasil Probabilitas Kulit ( P[ Berminyak ] ) : $total_berminyak <br>";
echo "Hasil Probabilitas Kulit ( P[ Sensitif ] ) : $total_sensitif <br>";
echo "Hasil Probabilitas Kulit ( P[ Kombinasi ] ) : $total_kombinasi <br>";
echo "Hasil Probabilitas Kulit ( P[ Kering ] ) : $total_kering <br>";
echo "<br>";


$arr = [$total_sensitif,$total_berminyak,$total_kombinasi,$total_kering];
$max = max($arr);
 
for ($i=0; $i < count($arr); $i++) { 

}
 
echo '<br> Nilai Terbesar dari array diatas ialah ' . $max;

if ($total_sensitif == $max) {
echo "<b>Jadi Probabilitas Kulit terklasifikasi <b>Sensitif<br>";
echo "Solusi : Menggunakan pembersih wajah yang tepat. Cucilah wajah setidaknya 2 kali sehari, Melakukan eksfoliasi wajah secara rutin, Mengoleskan pelembap ke kulit wajah, Menggunakan produk make up yang tepat. Menggunakan sunscreen saat di luar ruangan".'</br>'.'</br>';
}
elseif ($total_berminyak == $max)  {
echo "<b>Jadi Probabilitas Kulit terklasifikasi <b>Berminyak<br>";
echo "Solusi : Menggunakan pembersih wajah yang tepat. Cucilah wajah setidaknya 2 kali sehari, Melakukan eksfoliasi wajah secara rutin, Mengoleskan pelembap ke kulit wajah, Menggunakan produk make up yang tepat. Menggunakan sunscreen saat di luar ruangan".'</br>'.'</br>';
}
elseif($total_kering == $max){
  echo "<b>Jadi Probabilitas Kulit terklasifikasi <b>Kering<br>";
echo "Hindari mandi dengan air yang terlalu panas, Lindungi kulit dari udara dingin, Lakukan perawatan di malam hari, Gunakan tabir surya dan pelembap, Gunakan sabun berbahan lembut.";
}
elseif ($total_kombinasi == $max) {
echo "<b>Jadi Probabilitas Kulit terklasifikasi <b>Kombinasi<br>";
echo "Solusi : Menggunakan pembersih wajah yang tepat. Cucilah wajah setidaknya 2 kali sehari, Melakukan eksfoliasi wajah secara rutin, Mengoleskan pelembap ke kulit wajah, Menggunakan produk make up yang tepat. Menggunakan sunscreen saat di luar ruangan".'</br>'.'</br>';
}
// elseif($total_normal == $max){
//   echo "<b>Jadi Probabilitas Kulit terklasifikasi <b>Normal<br>";
// echo "Hindari mandi dengan air yang terlalu panas, Lindungi kulit dari udara dingin, Lakukan perawatan di malam hari, Gunakan tabir surya dan pelembap, Gunakan sabun berbahan lembut.";
// }
else{
  echo "<b>Tidak Terdeteksi";
}
?>
  </td>
  </tr>
  </div>
  </div>
  <br>
<table>
  <br><br><br><br><br>
  <br><br><br>
</table>

</section>

</body>
<!--Footer-->
<footer class="footer_wrapper" id="contact">

</footer>

<br>

</html>
