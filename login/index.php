<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user1 WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung BR</title>
    <link rel="icon" href="../img/gambarlogin.png">
    <link rel="stylesheet" href="../css/home.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  
  <!-- navbar aja -->
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn " type="submit">Search</button>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">keranjang bro</a>
        </li>
      </ul>
  </div>
</nav>


<!-- hero banner -->
<div class="hero-container">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/gambarlogin.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv-QDolfTIKF6R6nbRPQa0NilU3HIXG_McwXg9JvuApA&s" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv-QDolfTIKF6R6nbRPQa0NilU3HIXG_McwXg9JvuApA&s" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>  

<!-- rekomendasi -->
<div class="rekomendasi-container">
  <div class="card">
    <img src=".." class="card-img-top" alt="..." >
    <div class="card-body">
      <h5 class="card-title">makaroni kroncong</h5>
    </div>
    <div class="card-body">
      <a href="#" class="card-link">k</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
</div>

<!-- jualan -->
<div class="main-container">
  <div class="row">
    <div class="col">
      <div class="dropdown ">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="card col-lg-2" >
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
  
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
