<?php
//session_start();



// Mettre en majuscule mb_strtoupper
if ((mb_strtoupper(isset($_POST['lettre_proposition'])) == mb_strtoupper(isset($_POST['bonne_lettre']))) && isset($_POST['mot']) != '') {

   $message_success = "Bravo tu as trouvé la bonne lettre du mot : " . isset($_POST['mot']);
   $_SESSION['point'] += 2;
} elseif (isset($_POST['mot']) != "") {
   $message_success = "La bonne lettre etait " . $_POST['bonne_lettre'] . " dans le mot " . $_POST['mot'];
}

$tableau = array();
// en fonction du choix du get le coix tableau : construction tableau 
if (isset($tableau) == 'animaux')
   $tableau =  array("CHAT", "VACHE", "LION", "POULET", "COCHON", "CANARD", "GIRAFE", "SINGE", "RENARD", "CHIEN", "CHEVAL", "PERROQUET", "TIGRE", "LAPIN", "RAT", "SOURIS", "CHEVAUX", "OURS", "CERF", "MOUTON");
if (isset($tableau) == 'cuisine')
   $tableau = array("FOURCHETTE", "COUTEAU", "ASSIETTE", "VERRE", "GOBELET", "FOUR", "POELE", "LOUCHE", "SPATULE", "CUILLERE", "FOUET", "SALADIER", "BOCAUX", "BATTEUR", "MICRO-ONDE", "GRILLE-PAIN", "FRITTEUSE", "MARMITE", "BOL", "TASSE");
if (isset($tableau) == 'couleur')
   $tableau = array("BLEUE", "ROUGE", "JAUNE", "VERT", "MARRON", "NOIR", "BLANC", "ROSE", "VIOLET", "TURQUOISE", "GRIS");


// compte toute les case du tableau 
$max_tableau = count($tableau);
// pour partir de 0 : 
$max_tableau -= 1;

//echo $max_tableau;
// id du numero dans le tableau pour pouvoir s'en sevir (l'appeler)
$numero_mot = rand(1, $max_tableau);
// on affiche tout nos mot
// echo '<br>' . $tableau[$numero_mot];
// converti une chiane de caracter en tableau (strlen)
$nombre_de_lettre = strlen($tableau[$numero_mot]);
// on affiche le nombre de lettre part mot
// echo '<br>' . $nombre_de_lettre;

// creation du tableau a parti du mot (chaine de caractere)
$tableau_des_lettres = str_split($tableau[$numero_mot]);

// une lettre choisis a retiré 
$supprimer_lettre_numero = rand(1, $nombre_de_lettre);

// on remet index a 0 
$i = 0;
// on parcours le tableaux de toute nos lettre 
foreach ($tableau_des_lettres as &$value) {
   $i++;
   // on retire une lettre de notre mot
   if ($i != $supprimer_lettre_numero)
      // ecrire la lettre
      $lettres_mot .= $value;
   else
      // affiche la valeur a rentré 

      $lettres_mot .= '<input type="text" maxlength="1" name="lettre_proposition" placeholder="???" style="max-width: 20px;border-radius: 5px;margin-left: 5px; text-align: center;"><input type="hidden" name="bonne_lettre" value="' . $value . '" ><input type="hidden" name="mot" value="' . $tableau[$numero_mot] . '"> ';
}
