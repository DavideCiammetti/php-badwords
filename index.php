<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>php</h1>

    <form action="show.php" method="GET">
        <!-- input frase -->
        <label for="word" >text1</label>
        <input type="text" id="word" name="firstWord">
        <!-- input parola da togliere -->
        <label for="word-two">text2</label>
        <input type="text" id="word-Two" name="secondWord">
        <!-- button invia -->
        <label for="invia">invia</label>
        <button type="submit" id="invia"  placeholder="send">send</button>
    </form>

</body>
</html>