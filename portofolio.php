<?php $conn = new mysqli("localhost", "root", "", "dbfajra");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Home</title>
      <!-- <link rel="stylesheet" type="text/css" href="stylecss.css"> -->
  </head>
  <body>
    

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <a class="navbar-brand" href="#">Fajra</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="portofolio.php">Portofolio</a>
      <a class="nav-link" href="tambah.php">Tambah Data</a>
      <a class="nav-link" href="Login.php">Logout</a>
    </div>
  </div>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">FAJRA ILHAMI</h1>
    <p class="lead">Selamat Datang di Website Resmi Fajra Ilhami</p>
  </div>
</div>

<h1><center>DATA NILAI</center></h1>
  <table border="1" align="center" cellpadding="10" cellspacing="2">
    <tr>
    <th>Semester</th>
    <th>IPK</th>
    </tr>
<?php
$sql = "SELECT * FROM tbipk";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row['Semester'] ?></td>
    <td><?php echo $row['IPK'] ?></td>
  </tr>
<?php
}
?>
  </table>
  <h5 align="center"><button aliqn="center">
    <a href="tambah.php">Tambah</a>
  </button></h5>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>