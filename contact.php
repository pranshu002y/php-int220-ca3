<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="https://ajax.com.goggleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootsrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBILE HUB</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}


.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


</style>
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



<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    
  </div>
  <div class="row">
    <div class="column">
      <img src="Iphone-X-HD.jpg" style="width:50%">
    </div>
    <div class="column">
     

    <div class="contact-title">
    <h1> SAY HELLO </h1>
    <h2> WE ARE READY TO SERVE YOU !!</h2>
</div>

<div class="contact-form">
    <form id="contact-form" method="post" action="">
        <input name="name" type="text" class="form-control" placeholder="your name" required>
        <br>
        <input name="email" type="email" class="form-control" placeholder="your email" required><br>

        <textarea name="message" class="form-control" placeholder="message" row="4" required></textarea><br>

        <input type="submit" class="form-control submit" value="SEND MESSAGE">



    </div>
  </div>
</div>

</body>
</html>
