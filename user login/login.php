<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
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

<body>
    <form>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2>LOGIN HERE</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>username</label>    
                    <input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
    <label> password</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> login</button>
</form>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6 login-right" >
            <h2>REGISTER HERE</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label>username</label>    
                    <input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
    <label> password</label>
    <input type="password" name="password" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> register</button>
</form>
</div>

</div>
</div>


</body>
</html>