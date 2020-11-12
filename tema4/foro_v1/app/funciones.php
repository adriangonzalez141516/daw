<?php
function usuarioOk($usuario, $contraseña) {
  
   // En un program real la validación no sería
   // tal trivial
   return ( strlen($usuario) >= 8  && $usuario == strrev($contraseña) );
    
}

function contarPalabras ($cadena){
    return str_word_count($cadena,0);
    
}


