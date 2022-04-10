<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'mobilehub');
$sql=" SELECT * FROM products WHERE features=1";
$features = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.com.goggleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootsrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILE HUB</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOBILE HUB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-2">
        
        

  <li class="nav-item dropdown">
          
          <div class="container mt-3">
  <center>
    <div class="btn-group">
     <a href="project.php" button type="button" class="btn btn-primary" >HOME</a>
     <a href="index.php" button type="button" class="btn btn-primary">BEST SELLER</a>
     <a href="gallery.php" button type="button" class="btn btn-primary">GALLERY</a>
     <a href="contact.php" button type="button" class="btn btn-primary">CONTACT US</a>
     <a href="rate.html" button type="button" class="btn btn-primary">SUPPORT US</a>
     <a href="table.html" button type="button" class="btn btn-primary">COMPARISON</a>
    </center>
    </div>
        </ul>       
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="col-md-2"></div>
    <div class="col-md-8">
            <h2 class="text-center">TOP PRODUCTS</h2><br><br>
            <?php 
            while($product = mysqli_fetch_assoc($features)):
            ?>
            <div class="col-md-5">
                <h4><?=$product['title'];?></h4>
                <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
                <p class="lprice">Rs<?= $product['price'];?></p>
                <a href="details.php">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
            </a>

</div>
<?php endwhile; ?>
            </div>
</div>
</body>
</html>