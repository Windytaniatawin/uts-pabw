<!DOCTYPE html>
<html lang="en">
<?php
include("koneksi.php");
$id = $_GET['id'];
$sql = $koneksi->prepare("SELECT * FROM `korona` where `korona`.`id` ='$id'");
$sql ->execute();

$data = $sql->fetch();

if(isset($_POST['update'])){
    $kabkota = $_POST['kabkota'];
    $positif = $_POST['positif'];
    $meninggal = $_POST['meninggal'];

    $sql1 = $koneksi->prepare("UPDATE `korona` SET `kabkota` ='$kabkota',`positif`='$positif',`meninggal`='$meninggal' where `id`='$id'");
    $sql1 -> execute();
    header("location:read.php");
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
<!-- Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-pink">
            <a class="navbar-brand" href="read.php">Covid-19 Data</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active" >
                  <a class="nav-link" href="read.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Logout</a>
                </li>
                
              </ul>
            
            </div>
          </nav>

    <!-- End Of Navbar-->
<!-- Form-->
<div class="jumbotron login-form">
  <h1 class="display-4">update</h1>
  
  <hr class="my-4">
  <form method="POST">
  <div class="form-group">
    <label for="kabkota">Kabupaten / Kota</label>
    <input type="text" class="form-control" id="kabkota" name="kabkota" value="<?=$data['kabkota']?>">
    
  </div>
  <div class="form-group">
    <label for="positif">positif</label>
    <input type="number" class="form-control" id="positif" name="positif" value="<?=$data['positif']?>">
  </div>
  <div class="form-group">
    <label for="meninggal">meninggal</label>
    <input type="number" class="form-control" id="meninggal" name="meninggal" value="<?=$data['meninggal']?>">
  </div>
 
  <button type="submit" class="btn btn-primary" name="update">submit</button>
</form>
</div>

<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>