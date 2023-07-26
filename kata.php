<?php
//Generador de contraseña 
$longitud = 10;
 echo generadorPass($longitud);

 function generadorPass($longitud): string{
  
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*(){}[]=<>';
    for($pass='', $n=strlen($caracteres)-1; strlen($pass)< $longitud; ) {
        $x = rand(0,$n);
        $pass.= $caracteres[$x];
      
      }
  return    $pass;
}
?>