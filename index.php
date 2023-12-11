<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="GET" >
        <label for="sentence"></label>
        <textarea name="sentence" id="sentence" cols="30" rows="10"></textarea>

        <label for="word"> inserisci la parola da eliminare</label>
        <input type="text" id="word" name="word">

        <button type="submit">invia</button>
    </form>
</body>
</html>