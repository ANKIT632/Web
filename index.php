<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
    <title>Blog</title>
</head>
<body>

<!-- nav bar -->
<?php include 'menu.php'; ?>

<!-- caurosel -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block"  src="img/img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- our services -->

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our servies</h3>
   </div>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
    <img class="card-img-top" src="img/img6.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">check services</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    </div>
    </div>

    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
    <img class="card-img-top" src="img/img6.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">check services</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    </div>
    </div>

<!-- card from bootstrap -->
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
    <img class="card-img-top" src="img/img6.jpg" alt="Card image">
    <div class="card-body">
        <h4 class="card-title">check services</h4>
        <p class="card-text">Some example text.</p>
        <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    </div>
    </div>
</div>
</div>

<!-- Gallery -->

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Gallery</h3>
   </div>

   <div class="container-fluid">
   <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>    

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  

       <div class="col-lg-4 col-md-4 col-12">
       <img src="img/img4.jpg" class="img-fluid pb-3">
       </div>  
  </div>
  
</div>
 <section>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 

  <footer>
<div class="footer-bottom text-center p-3 bg-dark text-white">
                copyright &copy; 2023  made by Ankit Gupta
            </div>
</footer>
</body>
</html>