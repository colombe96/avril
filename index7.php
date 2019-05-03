<?php
session_start();
$db = new PDO("mysql:hots=localhost; dbname=decor","root","");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['Se connecter']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($email) || empty($password))
    {
        $message = "remplisssez les champs!!";
    }
    else{
        $query = $db->prepare('SELECT email,mdp FROM users WHERE email=? AND mdp=?');
        $result = $query->execute([$email,$password]);
        $row = $query->fetch();

        if($query->rowCount() > 0)
        {
            $_SESSION['email'] = $row ['email'];
            header("Location: arcticle/index3.php");
        }
        else
        {
            $message = "mot de passe ou email incorrect";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>connexion</title>
</head>
<body>

    <div class="login">
        <form action="../arcticle/index3.php" method="POST">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Connexion</h1>
                </div>
                <div class="login-form">
                    <div class="control-group">
                        <input type="email" class="login-field" value="" placeholder="Email" id="login-name">
                        <label  for="name">Email</label>
                    </div>
                    
                    <div class="control-group">
                        <input type="password" class="login-field" value="" placeholder="mot de passe" id="login-pass">
                        <label for="passe">Mot de passe</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                        <a class="login-link" href="#">mot de passe oublié?</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>