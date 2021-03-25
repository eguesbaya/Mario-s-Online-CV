<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Mario's Online CV</title>
</head>
<body>
    <h1>Merci <?php echo $_POST['firstname'] ?> !</h1>
    <p>J'ai bien reçu ton message. Mes secrétaires champignons reviendront vers toi dans les plus brefs délais. 
        <em> Way to go!</em>
    </p>
    
</body>
</html>
<?php
                echo "Merci pour votre message " . $_POST[$firstname] . ".\n";

                echo "Mes fidèles champignons vous recontacteront dans 48h.\na";
