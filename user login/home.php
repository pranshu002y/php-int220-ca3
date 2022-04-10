<?php 
 session_start();
 if(!isset($_SESSION['username'])){
     header('location:login.php');
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <style>
        body
        {
            background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,,50,0.5)),url();
            background-size:cover;
            background-position:center;
        }
        .login-box{
            max-width:700px;
            float:none;
            margin:150px auto;
        }
    
.login-left
{
    background:rgba(211,211,211,0.5);
    padding:30px;
}
.login-right{
    background:#fff;
    padding:30px;
}
    
.form-control
{
    background-color:transparent !important;
}
a
{
    color:#fff !important;
    margin-top:-200px !important;
}
h1
{
    color:#fff !important;
    margin-top:200px; !important;
    text-align:center;
    text-tansform:uppercase;

}
    </style>

 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 </head>
 <body>

 <a class="float-right" href="logout.php">LOGOUT</a>
     welcome back bsdk ke fir se aa gye
     <h1> welcome<?php echo $_SESSION['username']; ?>
</h1>

 </body>
 </html>