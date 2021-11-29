<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
$nameValidation = false;
$emailValidation = false;
$ageValidation = false;

$emailCharToMatch = ["@", "."];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
    <main>
        <?php
        // name validation logic
        if (isset($_GET["name"])) {
            if (strlen($_GET["name"]) > 3) {
                $nameValidation = true;
            }
        }
        // email validation logic
        if (isset($_GET["mail"])) {

            $emailSubCheck = true;
            for ($i = 0; $i < count($emailCharToMatch); $i++) {
                if (!strstr($_GET["mail"], $emailCharToMatch[$i])) {
                    $emailSubCheck = false;
                }
            }
            if ($emailSubCheck) {
                $emailValidation = true;
            }
        }
        // age validation logic
        if (isset($_GET["age"])) {
            if (is_numeric($_GET["age"])) {
                $ageValidation = true;
            }
        }
        ?>
        <h1>
            <?php
            if ($nameValidation && $emailValidation && $ageValidation) {
                echo "Login Successful";
            } else {
                echo "Login Unsuccessful";
            }
            ?>
        </h1>

    </main>
</body>

</html>