<?php
   $frase = $_GET['firstWord'];
   $parola =  $_GET['secondWord'];
   $sost = '***';

   echo $frase;
   echo "\t";
   echo $parola;

   echo ' la frase è lunga ';
   echo "\t";
   echo strlen($frase);
   echo "\t";
   echo str_replace($parola, $sost, $frase);
?>