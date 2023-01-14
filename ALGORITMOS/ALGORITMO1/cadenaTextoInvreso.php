<?php

function cadenaTexto($texto){
    $textoauxiliar="";
    $constante="navidad";
    for($i=0;$i<strlen($texto);$i++)
    {
      
      if ($texto[$i]==" "){
            $textoauxiliar=$textoauxiliar.$constante;
      }else{
           $textoauxiliar=$textoauxiliar.$texto[$i];
      }
    }
    $rest = strrev($textoauxiliar);
    echo $rest;
}

cadenaTexto('El 31 de diciembre es el último día del año');



?>
