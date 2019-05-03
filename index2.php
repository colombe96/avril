<?php 
    $db = new PDO("mysql:host=localhost; dbname=decor","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 
     if(!empty($_POST))
     {
        
         $req=$db->prepare('INSERT INTO users(nom,prenom,email,mdp,telephone) VALUE(?,?,?,?,?)');
         $result = $req->execute
         ([
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['password'],
            $_POST['phone'],


         ]);

         header('location: ../connexion/index7.php');

     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>inscription</title>
</head>
<body>
    <div class="container">
        <h1>Formulaire d'Inscription</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenoms</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telephone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="telephone">
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>