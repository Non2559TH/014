<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index1</title>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
    <style type="text/css">
        body{
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>
<body>
        <?php
        include("header.php");
        ?>
        
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item" data-bs-interval="1000">
          <img src="https://i.pinimg.com/originals/47/d5/43/47d543ab8407c44f19932d905769c13e.jpg" height="400px">
    
        </div>
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8vgRUo1r9z4Y1vAljuHSGk080LW3P4G-BkBvEfxwX7xkwbWin7ibyhBrcQqQejEYSuNM&usqp=CAU" height="400px">
    
        </div>
        <div class="carousel-item" data-bs-interval="1000">
          <img src="https://thumbs.dreamstime.com/b/line-pattern-black-white-background-146798620.jpg" height="400px">
    
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>