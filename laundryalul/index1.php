<?php
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundry</title>

    <?php
      include "include/header.php";
    ?>


  </head>
  <body>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include "include/list.php"
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<style>
  .jumbotron {
    background-image: url('../laundryalul/home/img/chawnima.jpg');
    background-size: 1200px 750px; /* Untuk memastikan gambar sesuai dengan ukuran elemen */
    background-repeat: no-repeat; /* Untuk menghindari pengulangan gambar */
    padding: 150px;
    text-align: center;
  }
  .jumbotron h1 {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; /* Mengganti jenis font */
    font-size: 70px; /* Mengganti ukuran font */
    font-weight: bold; /* Mengatur ketebalan font */
    color: red; /* Mengganti warna teks (merah) */
  }
  
</style>



<div class="container">
    <div class="jumbotron text-center" style="padding: 150px; "> 
  <h1>Selamat Datang <br> <br> Laundry Sam'Alul</h1> 
  </div>
</div>

</body>
</html>
<?php
}else{
	header("location:login/index.php");
}
