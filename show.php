<?php
   $frase = $_GET['firstWord'];
   $parola =  $_GET['secondWord'];
   $sost = '***';
   // metodo per calcolare la lunghezza della stringa 
   $num = strlen($frase);
   // metodo per sostituire una parola con un altra stringa 
   $fraseCenzurata =  str_replace($parola, $sost, $frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bad words</title>
</head>
<body>
   <p>la frase inserita è: <?php echo $frase ?></p> <br>
   <p> la parola da sostituire è: <?php echo $parola?></p> <br>
   <p> la frase è lunga: <?php echo $num?></p> <br>
   <p>la frase censurata è: <?php echo $fraseCenzurata?></p>
</body>
</html>