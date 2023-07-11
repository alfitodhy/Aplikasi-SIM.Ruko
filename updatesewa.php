<?php if (isset($_POST['simpan'])) {

    $kon = mysqli_connect("localhost", "root", "", "sewaruko");

    $NIK = $_POST['nik'];
    $NamaPenyewa = $_POST['namapenyewa'];
    $NoHP = $_POST['nohp'];
    $NoRuko = $_POST['noruko'];
    $TanggalMulaiSewa = $_POST['tanggalsewa'];
    $TanggalAkhirSewa = $_POST['tanggalakhir'];
    $BesarPembayaran = $_POST['pembayaran'];

    mysqli_query($kon,"update penyewaruko set nik='$NIK', namapenyewa='$NamaPenyewa', nohp='$NoHP', noruko='$NoRuko' , tanggalsewa='$TanggalMulaiSewa' , tanggalakhir='$TanggalAkhirSewa' , pembayaran='$BesarPembayaran' where id='$NIK'");

    if ($q) {
        echo "<script>alert('Data sudah diedit !');</script>";
    } else {
        echo "<script>alert('Data gagal diedit !');</script>";
    }
    echo '<script>window.history.back()</script>';
   } header("location:index.php");
   
   ?>
