<?php
include 'config.php';
 
  $nama = $_POST['nama'];
 $ttl = $_POST['ttl'];
 $alamat = $_POST['alamat'];
 $total_berminyak = $_POST['total_berminyak'];
 $total_kering = $_POST['total_kering'];
 $total_sensitif = $_POST['total_sensitif'];
 $total_kombinasi = $_POST['total_kombinasi'];
 $max = $_POST['max'];

  $query = "INSERT INTO konsul value ('$nama','$ttl','$alamat','$total_berminyak','$total_kering','$total_sensitif','$total_kombinasi','$max')";
   $result= mysqli_query($conn,$query)or die (mysqli_error($conn));
   if ($result) {
      echo "
      <script>
        alert('Data Berhasil Di Tambahkan');
        document.location.href='perhitungan.php';
      </script>
      ";
    } else {
      echo "
      <script>
        alert('Data Gagal Di Tambahkan');
        document.location.href='perhitungan.php';
      </script>
      ";
    }
    mysqli_close($conn);
 
?>