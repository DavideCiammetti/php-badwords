<?php
   $frase = $_GET['firstWord'];
   $parola =  $_GET['secondWord'];
   $sost = '***';

   echo 'la frase inserita è:';
   echo $frase . "<br>";
   echo ' la parola da sostituire è:';
   echo $parola. "<br>";
   
   echo ' la frase è lunga: ';
   // metodo per calcolare la lunghezza della stringa 
   echo strlen($frase). "<br>";

   echo 'la frase censurata è:';
   // metodo per sostituire una parola con un altra stringa 
   echo str_replace($parola, $sost, $frase);
?>