<!DOCTYPE html>
<html lang="en">
<?php
include("koneksi.php");
if(isset($_POST['login'])){
  try{
  $pass = $_POST['password'];
  $user = $_POST['username'];
  $query = $koneksi->prepare("SELECT * FROM `users` WHERE username = '$user'");
  $query->execute();
  $data =$query->fetch();
  
    if($pass = $data['password']){
      header('location:read.php');
    }else{
      echo "password anda Salah!";
    }
 
  
    
   
  }catch(Exception $e){

  }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login Menu</title>
    <style>
        .login-form{
            margin:4rem;
            margin-left:25%;
            margin-right:25%;
        }
    </style>
</head>
<body>
<!--Login Form-->
<div class="jumbotron login-form">
  <h1 class="display-4">Silahkan Login</h1>
  <?php
  
  ?>
  <hr class="my-4">
  <form method="POST">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
    
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary" name="login">login</button>
</form>
</div>

<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>