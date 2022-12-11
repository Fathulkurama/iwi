<?php
include "koneksi.php";
$nama= $_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];
$sql = "INSERT INTO tbl_buku_tamu (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $sql)) {
  header("location:data_buku_tamu.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}