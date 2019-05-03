<?php
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
                $_SESSION['email'] = $email;
                header("Location: arcticle/index3.php");
            }
            else
            {
                $message = "mot de passe ou email incorrect";
            }
        }
    }
    
?>