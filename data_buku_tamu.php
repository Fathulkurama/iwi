<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <title>Infrastruktur Web dan Internet</title>
  </head>
  <body>
    <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
     <div class="container">
       <a class="navbar-brand" href="#">Infrastruktur Web dan Internet</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav ms-auto">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="data_buku_tamu.php">Data Buku Tamu</a>
           </li>

         </ul>
       </div>
     </div>
   </nav>
   <!-- End Navbar -->

<!--contact-->
<section id="contact">
<div class="container">
  <div class="mb-3 row text-center">
    <h1>Buku Tamu</h1>
  </div>
 
  <div class="row justify-content-center">
    <div class="col-md-8">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Pesan</th>
    </tr>
  </thead>
  <tbody>
<?php
include "koneksi.php";
$sql = "SELECT * FROM tbl_buku_tamu";
$result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <th scope="row"><?php echo $row["id"];?></th>
      <td><?php echo $row["nama"];?></td>
      <td><?php echo $row["email"];?></td>
      <td><?php echo $row["pesan"];?></td>
      <td><a href="aksi_hapus.php?id=<?php echo $row["id"];?>" onclick="return confirm('yakin ingin menghapus?')">hapus</a></td>
    </tr>
<?php } ?>
  </tbody>
</table>
    </div>
  </div>
 
</div>
</section>
<!--end services-->
<!--End card-->
 
    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>