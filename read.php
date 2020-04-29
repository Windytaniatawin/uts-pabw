<!DOCTYPE html>
<html lang="en">
<?php
include("koneksi.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CRUD data</title>
    <style>
       .datatable{
           width:100%;
       }
       .btn-magenta{
         background:magenta;
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
  <h1 class="display-6">Data Dampak Virus Corona Di Kepulauan Riau</h1>
   <hr class="my-4">
   <a href="insert.php"><button class="btn btn-magenta ">Tambah Data</button></a><br>
   <table class="table table-bordered datatable">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>Kabupaten / kota</th>
                      <th>Positif</th>
                      <th>Meninggal</th>
                      <th>update</th>
                      <th>delete</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php
                    $query = $koneksi->prepare("SELECT * FROM `korona`;");
                    $query -> execute();
                   
                    
                    while($data = $query->fetch()){ ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['kabkota'] ?></td>
                        <td><?php echo $data['positif'] ?></td>
                        <td><?php echo $data['meninggal'] ?></td>
                        <td><a href="update.php?id=<?=$data['id']?>"> <button class="btn btn-primary">update</button></a></td>
                        <td><a href="delete.php?id=<?=$data['id']?>"> <button class="btn btn-danger">delete</button></a></td>
                    </tr>
                   <?php } ?>
                    
                    
               
                  </tbody>
                  </table>
  
</div>


<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>