<?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'] . "\n\n";
    $name = $_SERVER['SERVER_NAME'];
    var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 8 exercice 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-secondary">

<div class="bg-light text-center mt-5 fs-4">
    <p>
        <?="Votre User Agent est : ".$userAgent;?>
    </p>
    
    <p>
        <?="Le nom de votre serveur est : ".$name;?>
    </p>
    
    <p>
        <?="L'adresse IP est - ".$ip;?>
    </p>
    
</div>
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-warning text-center fs-3 p-5">
                <form action="user.php" method="GET">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">lastname</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">firstname</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <button type="submit" class="btn btn-warning">Envoyer</button> 
                </form>
            </div>
        </div>
    </div>
</div> -->

</body>
</html>