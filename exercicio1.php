<?php
/*Faça uma página que exiba a hora e a frase “Bom dia”, “Boa tarde” ou “Boa
noite”, de acordo com a hora. Use a condicional if e a função date().*/
  
  echo "Agora são exatamente 
  ".date('H:i:s');
 ?>
 <h1><?php
  
    if(date('H')<12){
        echo "<tr> Bom Dia</tr>";
    }if (date('H')<18){
        echo "<tr> Boa Tarde</tr>";
    }else
    echo"Boa Noite";
  
   

?></h1>
