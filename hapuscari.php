
<?php $id=$_GET['id'];

if (isset($_GET['id'])) {

 $sql="delete from ruko where NomorRuko='".$id."'";

 $kon=mysqli_connect("localhost","root","","sewaruko");

 $q=mysqli_query($kon,$sql);
 
 if ($q) {
	 echo "<script>alert('Data sudah dihapus !');</script>";
 } else {
	 echo "<script>alert('Data gagal dihapus !');</script>";
 }
 echo '<script>window.history.back()</script>';
} header("location:cariruko.php");

?>