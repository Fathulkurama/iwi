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
   <!--Jumbotron-->
<div class="p-5 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h2 class="display-5 fw-bold">Profil</h2>
    <hr>
  <h4>NIM : 20.11.3742</h4>
  <h4>Nama : Muhammad Annung Fathul Rozaq</h4>
  </div>
</div>
<!--End Jumbotron-->
<!--card-->
<!--contact-->
<section id="contact">
<div class="container">
  <div class="mb-3 row text-center">
    <h1>Buku Tamu</h1>
  </div>
 
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="aksi_simpan.php" method="post">
      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" required id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" name="pesan" required id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
 
         
           
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
           
        </form>
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