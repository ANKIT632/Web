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

<!-- Contact us -->
<div >
<section class="my-3">
    <div  >
        <h2 class="text-center  card" style="background:gray" ><center><h3>Contact Us</h3></center></h2>
   </div>

<div class="container card p-3 mt-2 "  style="width: 650px; box-shadow:0px 0px 8px grey; height: 500px; margin:auto ; padding :auto  ; font-weight: bold;">

 <form action="userinfo.php" method="post">
   <div class="form-group">
    <label><h5>Username</h5></label>
    <input type="text" name="user"  autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
    <label><h5>Email Id </h5></label>
    <input type="text" name="email"  autocomplete="off" class="form-control">

</div>

<div class="form-group">
    <label><h5>Mobile </h5></label>
    <input type="text" name="mobile"  autocomplete="off" class="form-control">
</div>

<div class="form-group">
    <label><h5>Comments </h5></label>
   <textarea class="form-control" name="comment">

   </textarea>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
  
</section>   
</div>

<footer>
<div class="footer-bottom text-center p-3 bg-dark text-white">
                copyright &copy; 2023  made by Ankit Gupta
            </div>
</footer>
</head>
</html>