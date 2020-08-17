<div class="container">

   <table class="table table-striped">

      <thead>
         <tr>
            <!-- <th scope="col" style="text-align: center; font-size:30px;">#</th> -->
            <th scope="col" style="text-align: center; font-size:30px;">Titre</th>
            <!-- <th scope="col" style="text-align: center; font-size:30px;">Categorie</th>
            <th scope="col" style="text-align: center; font-size:30px;">Utilisation</th> -->
            <th scope="col" style="text-align: center; font-size:30px;">Aller</th>
         </tr>
      </thead>

      <tbody>
         <?php
         //Si la variable exercices n'est pas vide on parcours la table exercice
         foreach ($exercices as $exercice) :
         ?><tr>
               <!-- <th scope="row" style="font-size: 25px;">
                  <center>// $exercice['idExercice'] ?></center>
               </th> -->
               <td style="font-size: 25px; text-align:center;">
                  <?= $exercice['titre'] ?>
               <td style="font-size: 25px;">
                  <!-- <center>//$exercice['categorie'] ?>
               </td>
               </center>
               <td style="font-size: 25px;">
                  <center>// $exercice['compteurUtilisation'] ?>
               </td>
               </center> -->
                  <div class="container" style="text-align:center;">

                     <button class="btn-lg btn-secondary" style="border: 1px solid ;">
                        <a style="color:black " href=" <?php echo  'http://projeteducatif.bsb/index.php/exercice/show/' . $exercice['idExercice'] . '/5/'; ?>">GO</a>
                     </button>

                  </div>
               <?php endforeach;
               ?>
      </tbody>
   </table>

   <?php


   /* echo  isset($formulaire_exercice);
   var_dump($formulaire_exercice);
   */ ?>
</div>