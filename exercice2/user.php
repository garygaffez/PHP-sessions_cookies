<?php
    session_start();
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $age = $_SESSION['age'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>partie 8 exercice 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-dark">


<h1 class="text-center text-warning p-5">Message bien reçu !</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">    
                <div class="card-body text-center">
                    <h5 class="card-title mb-3">Rappel de vos informations</h5>
                    <p class="card-text"><b>Nom</b> : <?=$lastname;?></p>
                    <p class="card-text"><b>Prénom</b> : <?=$firstname;?></p>
                    <p class="card-text"><b>Age</b> : <?=$age;?></p>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>