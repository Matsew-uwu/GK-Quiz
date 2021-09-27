<? include './questions.php' ?>
<?php

// SCORE
echo $_GET;
if(isset($_GET['submit'])){

    if(!empty($_GET['pays'])) {

        foreach($_GET['pays'] as $value){
            echo "Chosen colour : ".$value.'<br/>';
        }

    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/traitement.css">
    <link rel="stylesheet" href="./css/background-gradient.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Quiz - Score</title>
</head>
<body>
    <?php 
        foreach ($_GET as $q){
            echo $q;
        }
    ?>
    <h2 style="text-align:center">User Profile</h2>

    <div class="card">
        <img src="./Images/pp.jpeg" alt="profile picture" style="width:100%">
        <h1><?php echo trim($_GET['nom']); ?> <?php echo trim($_GET['prenom']); ?></h1>
        <p>Email : <?php echo $_GET['email'] ?></p>
        <p><button>Contact </button></p> 
    </div>
    <div class="card">
        <h2>Resultats</h2>

        <h3>Question 1: </h3>
        <p>Quel pays font partis de l'Union Européenne ?</p>

        <h3>Question 2: </h3>
        <p>Combien de pays constituent l'Union Européenne ?</p>
        <p>Reponse donnee : <?php echo 'yes'.$_GET["radio"];?></p>
    </div>
</body>
</html>

