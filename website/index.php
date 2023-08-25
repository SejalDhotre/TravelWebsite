<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">




    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Travel & Explore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/image1.jpg" alt="Lets travel!" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Let's travel!</h3>
        <p>Come lets explore the world!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/image2.jpg" alt="Mountain calling!" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mountain calling!</h3>
        <p>Let's touch the heights...</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/image3.jpg" alt="Along the lake!" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Along the lake!</h3>
        <p>Enjoy your moments with the beautiful lake view!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/image4.jpg" alt="Beach vibes!" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Beach vibes!</h3>
        <p>Planning for a vaccy mood,then beaches are the best choice! </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Images/image5.jpg" alt="Dessert Safari!" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Dessert Safari!</h3>
        <p>Sometimes you find yourself in the middle of nowhere. Sometimes, in the middle of nowhere, you find yourself!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About us</h2>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="Images/image4.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4">This is your travel guide...</h2>
    <p class="py-3">Traveling is an activity which helps us to know our world in a better way. It fills us with enthusiasm to explore new places and cultures of different parts of the world. It opens doors of opportunities to learn and understand different cultures, beliefs and lifestyles of people living in the world.</p>
    <a href="about.php" class="btn btn-success">Check more</a>
  </div>
</div>
</div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="Images/image2.jpg" alt="Card image">
  <div class="card-body">
  <h4 class="card-title">Mountain Calling</h4>
    <p class="card-text">Let's Touch the Heights!</p>
    <a href="mountain.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="Images/image3.jpg" alt="Card image">
  <div class="card-body">
  <h4 class="card-title">Along the Lake</h4>
  <p class="card-text">Enjoy your Moment with Beautiful Lake View!</p>
  <a href="lake.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="Images/image4.jpg" alt="Card image">
  <div class="card-body">
  <h4 class="card-title">Beaches Vibes</h4>
  <p class="card-text">Planning for a vaccy mood then Beaches are the best Choice!</p>
    <a href="beach.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
</div>
</div>

</section>



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image2.jpg" class="img-fluid pb-4"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image3.jpg" class="img-fluid pb-4"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image4.jpg" class="img-fluid pb-4"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image2.jpg" class="img-fluid pb-4"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image3.jpg" class="img-fluid pb-4"> 
</div>
<div class="col-lg-4 col-md-4 col-12">
 <img src="Images/image4.jpg" class="img-fluid pb-4"> 
</div>

</div>
</div>

</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact </h2>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
          <label>Email id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
       </div>
       <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comment">
          </textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</div>


</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@Travel.com</p>
</footer>




<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

