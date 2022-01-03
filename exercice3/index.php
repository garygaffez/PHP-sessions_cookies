<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        setcookie('username', $username, time()+3600*24, '/');
        setcookie('password', $password, time()+3600*24, '/');
    }     
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 8 exercice 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-warning text-center fs-3 p-5">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="">Login</label>
                        <input type="text" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Mot de passe</label>
                        <input type="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-warning">Envoyer</button> 
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>