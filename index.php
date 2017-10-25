<?php

    $_isSubmitted = isset($_REQUEST['submit']);

    if ($_isSubmitted) {
        
        echo $_POST['firstname'], PHP_EOL;
		echo $_POST['lastname'], PHP_EOL;
		echo $_POST['email'], PHP_EOL;
		echo $_POST['password'], PHP_EOL;
		echo $_POST['message'], PHP_EOL;

    }
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oefening-10</title>
</head>
<body>

    <form action="" method="POST">
            
        <label for="firstname">Voornaam</label>
        <input id="firstname" type="text" name="firstname">
        <label for="lastname">Achternaam</label>
        <input id="lastname" type="text" name="lastname">

        <label for="email">E-mailadres</label>
        <input id="email" type="text" name="email">

        <label for="password">Wachtwoord</label>
        <input id="password" type="password" name="password">

        <label for="message">Bericht</label>
        <textarea id="message" type="text" name="message"></textarea>

        <input type="submit" name="submit">

    </form>

</body>
</html>