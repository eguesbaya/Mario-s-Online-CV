<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/thanks.css">
    <title>Mario's Online CV</title>
</head>

<body class="form-body">
    <img class= "toad" src="images/footer/toad.png" alt="three mushrooms">
    
    <section class="form-message">

    <h1> merci <?php echo $_POST['firstname'] . " !" ?></h1>

    <p>J'ai bien reçu ton message. Mes fidèles secrétaires champignons reviendront vers toi dans les plus brefs délais
        via <strong> <?php echo $_POST['email'] ?></strong>.
    </p>

</section>
    
</body>
</html>
<?php

