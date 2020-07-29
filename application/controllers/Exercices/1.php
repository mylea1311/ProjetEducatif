<?php
//session_start();

$_SESSION['difficulter'] = $difficulter;
if ($_SESSION['difficulter'] == 0)
   $_SESSION['difficulter'] = 5;
if ($_SESSION['point'] < 1)
   $_SESSION['point'] = 0;
$_SESSION['difficulter_champ'] = $difficulter;
if ($_SESSION['difficulter_champ'] == 0)
   $_SESSION['difficulter_champ'] = 5;
$_SESSION['difficulter_max'] = $_SESSION['difficulter'] * 2;

if (isset($_POST['proposition']) == 1) {


   //Début de boucle
   // $i = 1; quand la variable $i arrive à la valeur de $_SESSION['difficulter'] la boucle s'arrête 

   $point_note = 0;
   $note = 0;
   for ($i = 1; $i <= $_SESSION['difficulter_champ']; $i++) {
      ///////////////////

      $calcule =  $_POST['chiffre1-' . $i] . ' ' . $_POST['operateur-' . $i] . ' ' . $_POST['chiffre2-' . $i] . ' = ' . $_POST['resultat' . $i];

      $note++;

      if (isset($_POST['proposition' . $i]) == $_POST['resultat' . $i]) {
         $_SESSION['point'] =  $_SESSION['point'] + 1;
         $point_note++;
         $message_succes = 1;
      } else {
         $message_reponse .= "<span class='alert-danger' style='border: 2px solid crimson; border-radius:7px; padding-left:5px;padding-right:5px'> La bonne réponse est : " . $calcule . ' </span> <br>   <br>';
         $message_erreur = 1;
      }


      ///////////////////
   }
   //Fin boucle

}




if (isset($message_succes) == 1) {

   $message_reponse .= "<span class='alert-success' style='border: 2px solid ; border-radius:7px; padding-left:5px;padding-right:5px'> Bonne réponse !  </span> <br>   <br>";
   $message_lvl = "";
} elseif (isset($message_erreur) == 1) {

   $message_reponse .= "<span class='alert-danger' style='border: 2px solid crimson; border-radius:7px; padding-left:5px;padding-right:5px'> La bonne réponse est : " . $calcule . ' </span> <br>   <br>';
   $message_lvl = "";
} else {

   $mesage_h1 = "";
   $message_lvl = "";
}


////////////Construction exercice//////////////
$tableau_calcule = array();


for ($i = 1; $i <= $_SESSION['difficulter_champ']; $i++) {

   $ligne_de_calcule = array();


   if ($i == 1) {
      $chiffre1 = rand(1, $_SESSION['difficulter_max']);
   }


   $chiffre2 = rand(1, 5);

   // //1 est l'addition le 2 est la suppression

   if ($difficulter > 10)
      $operateur = rand(1, 3);

   else
      $operateur = rand(1, 2);


   if ($operateur == 1) {
      $operateur = '+';
      $resultat = $chiffre1 + $chiffre2;
   }


   if ($operateur == 2) {
      $resultat = $chiffre1 - $chiffre2;
      $operateur = '+';
   }

   if ($difficulter > 10) {
      if ($operateur == 3) {
         $resultat = $chiffre1 + $chiffre2;
         $operateur = '+';
      }
   }




   $formulaire_exercice .= "<input type='hidden'  name='resultat" . $i . "' value='" . $resultat . "' > ";
   $formulaire_exercice  .= "<input type='hidden' name='chiffre1-" . $i . "' value='" . $chiffre1 . "' > ";
   $formulaire_exercice  .= "<input type='hidden' name='operateur-" . $i . "' value='" . $operateur . "'  > ";
   $formulaire_exercice  .= "<input type='hidden' name='chiffre2-" . $i . "' value='" . $chiffre2 . "'  > ";

   $formulaire_exercice  .= "<font size='9' > " . $chiffre1 . " " . $operateur . "  " . $chiffre2 . "  =  </font>
<input type'number' name='proposition ' " . $i . "' placeholder='??';  style='max-width: 100px; font-size:55px;
height: 60px;border-radius: 10px;  text-align: center;'><br> <br>";

   $formulaire_exercice  = $formulaire_exercice;
}



/////////////////////////


var_dump($_SESSION);
