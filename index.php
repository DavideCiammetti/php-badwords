<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="show.php" method="GET">
            <!-- input frase -->
            <label for="word">frase</label>
            <input type="text" id="word" name="firstWord" class="m-b">
            <!-- input parola da togliere -->
            <label for="word-two">parola da sostituire</label>
            <input type="text" id="word-Two" name="secondWord" class="m-b">
            <!-- button invia -->
            <label for="invia">invia</label>
            <button type="submit" id="invia"  placeholder="send">send</button>
        </form>
    </main>
</body>
</html>