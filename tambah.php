<?php $conn = new mysqli("localhost", "root", "", "dbfajra");?>
<!DOCTYPE html>
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
	<h2 align="center">TAMBAH DATA</h2>
	<form method="POST" accept ="">
		<table border="1" align="center" cellpadding="">
			<tr>
				<td><label> Semester	:</label></td>
				<td><input type="text" name="Semester"></td>
			</tr>
			<tr>
				<td><label> IPK	:</label></td>
				<td><input type="text" name="IPK"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" value="SUBMIT"></td>
			</tr>
		</table>
	</form>


</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$Semester = $_POST['Semester'];
		$IPK = $_POST['IPK'];
		$hasil = $conn->query("INSERT INTO tbipk VALUES (null, '$Semester', '$IPK')");
		echo "<script> alert('Data Inputed Succes'); </script>";
		echo "<script> location= 'portofolio.php';</script> ";
	}
?>

<?php

class data{
	public $nama_lengkap = "Semester",
		   $no_ktp = "IPK";
}

$data1 = new data("1", "3.48");
$data2 = new data("2", "3.2");
$data3 = new data("2", "3.57");
