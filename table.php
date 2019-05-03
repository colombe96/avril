<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">TABLE ADMIN</h1>
        <div class="row">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Telephone</th>
    </tr>
  </thead>
  <tbody>
      <?php
  
  $db = new PDO("mysql:hots=localhost; dbname=decor","root","");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  
$query = $db->prepare('SELECT * FROM users ORDER BY id DESC');
$query->execute([]);
$statement = $query->fetchAll();
foreach ($statement as $row) {
echo '<tr>';
echo '<td>' .$row['id'] . '</td>';
echo '<td>' . $row['nom'] . '</td>';
echo '<td>' . $row['prenom'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['mdp'] . '</td>';
echo '<td>' . $row['telephone'] . '</td>';
echo '</tr>';
}


?>
   
  </tbody>
</table>

        </div>

    </div>
   
</body>
</html>