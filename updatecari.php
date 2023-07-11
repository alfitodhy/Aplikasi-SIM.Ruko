
<?php if (isset($_POST['simpan'])) {

  $kon = mysqli_connect("localhost", "root", "", "sewaruko");


  $NomorRuko     = $_POST['noruko'];
  $HargaSewa     = $_POST['hargasewa'];
  $AlamatRuko    = $_POST['alamat'];
  $StatusRuko    = $_POST['status'];


mysqli_query($kon,"update ruko set hargasewa='$HargaSewa', alamat='$AlamatRuko', status='$StatusRuko' where id='$id'");
 

if ($q) {
  echo "<script>alert('Data sudah diedit !');</script>";
} else {
  echo "<script>alert('Data gagal diedit !');</script>";
}
echo '<script>window.history.back()</script>';
} header("location:cariruko.php");

?>