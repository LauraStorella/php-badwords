<?php

/* 
Esercizio PHP
- Creare una variabile con un paragrafo di testo.
- Visualizzare a schermo il paragrafo con la relative lunghezza 
- sostituire la badword passata in GET con tre *.
*/


// Creo variabile con paragrafo di testo
$text = 'Lorem ipsum dolor sit amet, consectetur adipisci elit badword, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


// Visualizzo a schermo il paragrafo con la relative lunghezza
$textLength = strlen($text);
echo $textLength;


// Sostituisco la badword passata in GET con tre *
//  ---> definisco variabile "badword" che verrà sostituita
//  ---> recupero il parametro "badword" passato in GET
//  ---> creo nuova variabile che conterrà il testo modificato
$badword = $_GET['badword'];
$hiddenText = str_replace("badword", "***", $text);
echo $hiddenText;
var_dump($hiddenText);
?>


   
   
<h1>Esercizio Badword</h1>
<p><?php echo $text; ?></p>
<p>Lunghezza testo: <?php echo $textLength; ?> caratteri</p>
<p>Parola nascosta: <?php echo $badword; ?></p>
<p>Testo modificato: <?php echo $hiddenText; ?></p>





