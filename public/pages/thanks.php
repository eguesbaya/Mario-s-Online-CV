<?php
$formData = array_map('trim', $_POST);

$indexData = ['lastname', 'firstname', 'email', 'message'];
$errors = [];

foreach ($formData as $key => $value) {
    if (empty($formData[$key])) {
        $errors[$key] = 'The form field ' . ucfirst($key) . ' must be filled';
    }
    if ($key === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $errors['emailType'] = 'The email format is not valid';
    }
    $formData[$key] = htmlentities($value);    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" href="../images/Mario-icon.png" />
    <title>CV Mario</title>
</head>

<body class="form-body">
    <img class= "toad" src="../images/footer/toad.png" alt="three mushrooms">
    
    <section class="form-message">

    <h1> merci <?= $formData['firstname'] . " " . $formData['lastname'] . " !" ?></h1>

    <p class="form-p">J'ai bien reçu ton message. Mes fidèles secrétaires champignons reviendront vers toi dans les plus brefs délais
        via <strong> <?= $formData['email'] ?></strong>.
    </p>
    <p>
        <a class="back-to-main" href = "../index.php">BACK TO MAIN SITE</a>
    </p>
</section>
</body>
</html>