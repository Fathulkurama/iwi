<?php
include "koneksi.php";
$id = $_GET["id"];
$sql = "DELETE FROM tbl_buku_tamu WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  header("location:data_buku_tamu.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}