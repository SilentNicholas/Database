<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<form action="" method="POST">
<div class="form-group">
<label for="fname">Имя</label> 
<input type="text" name="fname" class="form-control" id="fname" placeholder="Ваше имя">
</div>
<div class="form-group">
<label for="lname">Фамилия</label>
<input type="text" name="lname" class="form-control" id="lname" placeholder="Ваша фамилия">
</div>
<div class="form-group">
<label for="number">Номер</label>
<input type="number" name="number" class="form-control" id="number" placeholder="Ваш номер">
</div>
<div class="form-group">
<label for="email">Email</label> 
<input type="email" name="mail" class="form-control" id="mail" placeholder="Ваш email">
</div>
<div class="form-group">
<label for="address">Адрес</label>
<input type="text" name="address" class="form-control" id="address" placeholder="Ваш адрес">
</div>
<input type="submit" name="submit" class="btn btn-primary mt-3">
</form>
</div>
</div>
<div class="col-md-4">
</div>
</div>
<?php
$mysqli = new mysqli("localhost", "root", "", "informations");
$mysqli->query("CREATE TABLE contacts(
id INT AUTO_INCREMENT PRIMARY KEY,
user_fname VARCHAR(20) NOT NULL,
user_lname VARCHAR(20),
user_number INT,
user_mail VARCHAR(20),
user_address VARCHAR(20));");
if(isset($_POST["submit"])){	
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$number = $_POST["number"];
$mail = $_POST["mail"];
$address = $_POST["address"];
$a = $mysqli->query("INSERT INTO contacts VALUES(
NULL,
'$fname',
'$lname',
'$number',
'$mail',
'$address');");
header('Location: ./table.php');
}
$mysqli->close ();
?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>