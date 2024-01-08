<?php
   $frase = $_GET['firstWord'];
   $parola =  $_GET['secondWord'];
   $sost = '***';

   echo 'la frase inserita è:';
   echo "\t";
   echo $frase;
   echo ' la parola da sostituire è:';
   echo "\t";
   echo $parola;

   echo ' la frase è lunga: ';
   echo "\t";
   echo strlen($frase);
   echo "\t";
   echo 'la frase censurata è:';
   echo "\t";
   echo str_replace($parola, $sost, $frase);
?>