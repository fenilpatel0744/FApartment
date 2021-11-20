<?php
include("../dbConn.php")
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maintenance</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- icons only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <style>
  .container{
  max-width:1024px;
  padding:3rem 0;
  }
  .imgBx{
    height:300px;
  width: 270px;
  margin-top: 35px;
  border-radius: 2rem;
  }
  .chair_card{
  background: #f7ead9;
  height:560px;
  border-radius: 2rem;
  text-align: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  /*background-image: url("../images/b3.jpg");
  background-repeat: no-repeat;*/
  }
  .lamp_card{
  background: #dfe7f2;
  height:560px;
  border-radius: 2rem;
  text-align: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  /*background-image: url("../images/b5.jpeg");
  background-repeat: no-repeat;*/
  }
  .couch_card{
  background: #fef4b7;
  height:560px;
  border-radius: 2rem;
  text-align: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  /*background-image: url("../images/b6.jpg");
  background-repeat: no-repeat;*/
  }
  .title{
  font-size: 1.1rem;
  font-weight: 600;
  padding-top: 30px;
  }
  .description{
  color:#94908d;
  font-size: 0.9rem;
  font-weight: 500;
  margin-top:10px;
  }
  .circle{
  margin:3.5rem 0 0;
  }
  .chair_bg,
  .lamp_bg,
  .couch_bg{
  border-color:#acb9c9;
  }
  @media (max-width:992px){
  .container{
  max-width: 720px;
  }
  .lamp_card,
  .chair_card,
  .couch_card{
  margin-bottom:2rem;
  }
  }
  .fa-customize{
    color: blue;
    font-size: 30px;
  }
  .fa-customize1{
    color: #ff8080;
    font-size: 30px;
  }
  .fa-customize2{
    color: orange;
    font-size: 30px;
  }
  .fa-customize:hover, .fa-customize1:hover, .fa-customize2:hover{
    color: black;
  }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Apartment
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../notification.php">Notification</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Expenses
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="../festival.php">Festival</a></li>
                <li><a class="dropdown-item active" href="#">Maintenance</a></li>
                <li><a class="dropdown-item" href="../extra.php">Extra</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback/index.php">Feedback</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top: 50px;">
      <div class="row m-0">
        <div class="col-sm-12 col-lg-4">
          <div class="lamp_card">
            <h1 class="title text-center">BLOCK A</h1>
            <p class="description text-center">
            </p>
            <img class="imgBx" src="../images/b1.jpg">
            <div class="circle text-center rounded-circle chair_bg mx-auto">
              <a href="block_1.php">
                <i class="fas fa-arrow-circle-right fa-customize"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-4">
          <div class="chair_card">
            <h1 class="title text-center">BLOCK B</h1>
            <p class="description text-center">
            </p>
            <img class="imgBx" src="../images/b2.jpeg">
            <div class="circle text-center rounded-circle lamp_bg mx-auto">
              <i class="fas fa-arrow-circle-right fa-customize1"></i>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-lg-4">
          <div class="couch_card">
            <h1 class="title text-center">BLOCK C</h1>
            <p class="description text-center">
            </p>
            <img class="imgBx" src="../images/b3.jpeg">
            <div class="circle text-center rounded-circle couch_bg mx-auto">
              <i class="fas fa-arrow-circle-right fa-customize2"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>