<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container table-responsive">
<div class="row">
<div class="mt-3 col">
<table class="table table-hover table-bordered table-sm">
<thead class="thead-light">
<tr>
<th scope="col">ID</th>
<th scope="col">Имя</th> 
<th scope="col">Фамилия</th> 
<th scope="col">Номер</th>
<th scope="col">E-mail</th> 
<th scope="col">Адрес</th>
</tr>
</thead>
<?php
$mysqli = new mysqli("localhost", "root", "", "informations");
$query = $mysqli->query("SELECT * FROM contacts;");
foreach ($query as $val){?>
<tbody>
<tr>
<th scope="row"><?= $val['id']?></th>
<td><?= $val['user_fname']?></td>
<td><?= $val['user_lname']?></td>
<td><?= $val['user_number']?></td>
<td><?= $val['user_mail']?></td>
<td><?= $val['user_address']?></td>
</tr>
<?php } ?>
</tbody>
</table>
<a scope class="btn btn-primary" href="./index.php" role="button">Добавить контакт</a>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>