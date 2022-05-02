<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta http-equiv="refresh">
    <title>Alsol Technology Solution Pvt. Ltd.</title>
    <link rel="icon" href="./Assets/Icons/Logo/LOGO-dark.png">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <div class="card">
        <div class="card-body">
          <?php 
              if(isset($_SESSION['name'])){

                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p class="text-center"><strong>Hey</strong> <?php echo ($_SESSION['status']); ?></p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                unset ($_SESSION['name']);
            }
          ?>
        </div>
      </div>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://source.unsplash.com/1600x900/?nature,water" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x900/?human,computer" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x900/?nature,tiger" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>




    <!-- Java Scripts -->
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" crossorigin="anonymous"></script>
</body>

</html>